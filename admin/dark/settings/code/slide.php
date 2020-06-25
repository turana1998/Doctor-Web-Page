<?php
$siyahi = $CRUD->SELECT("slide", 1);
if (isset($_POST['slide_elave'])) {
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $ksekil = $_POST["ksekil"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];
    $yol = "../../sekil/slide/" . rand(100, 99999) . "-" . $ad;
    if (!in_array($tip, $tipler)) {
        $General->Status("slide-elave", "no");
        exit;
    }
    $col = "
        basliq=:basliq,
        mezmun=:mezmun,
        sekil=:sekil
    ";
    $arr = [
        'basliq' => $_POST["basliq"],
        'mezmun' => $_POST["mezmun"],
        'sekil' => substr($yol, 6)
    ];
    if ($CRUD->INSERT("slide", $col, $arr)) {
        move_uploaded_file($tmp, $yol);
        $General->Status("slide-siyahi", "ok");
        exit;
    } else {
        $General->Status("slide-elave", "no");
        exit;
    }
}

if (@$_GET["SlideSil"] == "ok") {
    if ($CRUD->DELETE("slide", @$_GET["id"])) {
        unlink(@$_GET["sekil"]);
        $General->Status("slide-siyahi", "ok");
    } else {
        $General->Status("slide-siyahi", "no");
    }
}

if (@$_GET["rdk"] == "ok") {
    $rdk = $CRUD->Select("slide", 0, "where id=" . @$_GET["id"]);
    if(empty($rdk)){
        $General->Status("slide-siyahi", "hmm");
        exit;
    }
}

if (isset($_POST['slide_redakte'])) {
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $ksekil = $_POST["kohne_sekil"];
    $id = $_POST["id"];
    $tipler = ["image/png", "image/jpeg", "image/gif"];
    $yol = "../../sekil/slide/" . rand(100, 99999) . "-" . $ad;
    if ($olcu > 0 && !in_array($tip, $tipler)) {
        $General->Status("slide-siyahi", "no"); 
        exit;
    }
    $col = "
        basliq=:basliq,
        mezmun=:mezmun,
        sekil=:sekil
        where id=:id
    ";
    $arr = [
        'id' => $_POST["id"],
        'basliq' => $_POST["basliq"],
        'mezmun' => $_POST["mezmun"],
        'sekil' => $olcu > 0 ? substr($yol, 6) : substr($ksekil, 6)
    ];
     if ($CRUD->UPDATE("slide", $col,null, $arr)) {
        if($olcu>0){
            unlink($ksekil);
            move_uploaded_file($tmp, $yol);
        }
        $General->Status("slide-siyahi", "ok");
        exit;
    } else {
        $General->Status("slide-siyahi", "no");
        exit;
    }
}
