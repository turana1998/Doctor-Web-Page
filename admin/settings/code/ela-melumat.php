<?php

$data = $CRUD->Select("nizamlamalar");

if (isset($_POST["elaqe-melumatlari"])) {

    $column = '
    tel=:telefon,
    ofis=:ofiss,
    email=:elektron_poct_unvani,
    unvan=:adress
    ';
    $arr = [
        "telefon" => $_POST["telefon"],
        "ofiss" => $_POST["ofis"],
        "elektron_poct_unvani" => $_POST["email"],
        "adress" => $_POST["unvan"]
    ];

    if ($CRUD->UPDATE("nizamlamalar", $column, null, $arr)) {
        $General->Status("elaqe-melumatlari","ok");
        exit;
    } else {
        $General->Status("elaqe-melumatlari","no");
        exit;
    }
}