<?php

$data = $CRUD->Select("nizamlamalar");


if (isset($_POST["nizam"])) {
    $olcu = $_FILES["robots"]["size"];
    $tip = $_FILES["robots"]["type"];
    $tmp = $_FILES["robots"]["tmp_name"];

    if ($size > 0 && $tip != "text/plain") {
        $General->Status("nizamlamalar","no");
        exit;
    }

    $column = '
    Title=:title,
    Description=:descc,
    keywords=:keywords,
    robots=:robots
    ';
    $arr = [
        "title" => $_POST["basliq"],
        "descc" => $_POST["aciqlama"],
        "keywords" => $_POST["acar"],
        "robots" => "robots.txt"
    ];

    if ($CRUD->UPDATE("nizamlamalar", $column, null, $arr)) {
        $size > 0 ? unlink("../../robots.txt") : "";
        move_uploaded_file($tmp, "../../robots.txt");
        $General->Status("nizamlamalar","ok");
        exit;
    } else {
        $General->Status("nizamlamalar","no");
        exit;
    }
}
