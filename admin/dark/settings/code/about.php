<?php

$data = $CRUD->Select("nizamlamalar");

if (isset($_POST["haqqinda"])) {
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $ksekil = $_POST["ksekil"];
    $tipler = ["image/png","image/jpeg","image/gif"];
    $yol = "../../sekil/".$ad;
    if ($olcu > 0 && !in_array($tip,$tipler)) {
        $General->Status("haqqinda","no");
        exit;
    }

    $column = '
    Basliq=:title,
    Mezmun=:descc,
    sekil=:sekil
    ';
    $arr = [
        "title" => $_POST["basliq"],
        "descc" => $_POST["mezmun"],
        "sekil" => $olcu > 0 ? substr($yol,6) : $ksekil
    ];

    if ($CRUD->UPDATE("nizamlamalar", $column, null, $arr)) {
        $olcu > 0 ? unlink("../../".$ksekil) : "";
        move_uploaded_file($tmp, $yol);
        $General->Status("haqqinda","ok");
        exit;
    } else {
        $General->Status("haqqinda","no");
        exit;
    }
}