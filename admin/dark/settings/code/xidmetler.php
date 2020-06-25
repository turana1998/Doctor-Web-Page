<?php
$xsiyahi = $CRUD->SELECT("services",1);

if(isset($_POST["xidmetler_elave"])){
    $ad = $_FILES["sekil"]["name"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tipler = ["image/png","image/jpeg"];
    $yol = "../../sekil/xidmetler/".rand(100,9999)."-".$ad;
    if(!in_array($tip,$tipler)){
        $General->Status("xidmetler-elave","no");
        exit;
    }

    $col = "
    ad=:ad,
    basliq=:basliq,
    alt_basliq=:alt_basliq,
    sira=:sira,
    icon=:icon,
    sekil=:sekil
    ";
    $arr = [
        "ad"=>$_POST["ad"],
        "basliq"=>$_POST["basliq"],
        "alt_basliq"=>$_POST["alt_basliq"],
        "sira"=>$_POST["sira"],
        "icon"=>$_POST["icon"],
        "sekil"=>substr($yol,6)
    ];
    if($_POST['icon'] == ""){
        $General->Status("xidmetler-elave","no");
    }
    else{
    if($CRUD->INSERT("services",$col,$arr)){
        move_uploaded_file($tmp,$yol);
        $General->Status("xidmetler-siyahi","ok");
        exit;
    }
    else{
        $General->Status("xidmetler-elave","no");
        exit;
    }
    }
      
}

if(@$_GET["XidmetSil"] == "ok"){
    if($CRUD->DELETE("services",@$_GET["id"])){
        unlink(@$_GET["sekil"]);
        $General->Status("xidmetler-siyahi","ok");
    }
    else{
        $General->Status("xidmetler-siyahi","no");
    }
}

if(@$_GET["rdk"] == "ok"){
    $rdk = $CRUD->Select("services",0,"where id=".@$_GET["id"]);
}


if(isset($_POST['xidmetler_redakte'])){

    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $tipler = ["image/png","image/jpeg","image/gif"];
    $yol = "../../sekil/xidmetler/".rand(100,99999)."-".$ad;
    $ksekil = $_POST["kohne_sekil"];
    $sira = $_POST["xidmet_sira"];
    $icon = $_POST["xidmet_icon"];
    $id = $_POST["id"];
    if ($olcu>0 && !in_array($tip,$tipler)) {
        $General->Status("xidmetler-siyahi","no");
        exit;
    }

    $col = "
    ad=:ad,
    basliq=:basliq,
    alt_basliq=:alt_basliq,
    sira=:sira,
    icon=:icon,
    sekil=:sekil
    where id = {$id}
    ";
    
    $arr = [
        "ad"=>$_POST["ad"],
        "basliq"=>$_POST["basliq"],
        "alt_basliq"=>$_POST["alt_basliq"],
        "sira"=>$_POST["sira"] == 0 ? $sira : $_POST["sira"],
        "icon"=>$_POST["icon"] == "" ? $icon : $_POST["icon"],
        "sekil"=>$olcu >0 ? substr($yol,6) : $ksekil
    ];
    if ($CRUD->UPDATE("services", $col,null , $arr)) {
        if($olcu>0){
            unlink("../../".$ksekil);
            move_uploaded_file($tmp, $yol);
        }
        $General->Status("xidmetler-siyahi","ok");
        exit;
    } else {
        $General->Status("xidmetler-siyahi","no");
        exit;
    }
}