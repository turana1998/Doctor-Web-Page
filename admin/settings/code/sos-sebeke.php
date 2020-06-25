<?php

$data = $CRUD->Select("nizamlamalar");

if (isset($_POST["sosial-sebekeler"])) {

    $column = '
    facebook=:face,
    instagram=:ins,
    twitter=:twit,
    linkedin=:link,
    github=:git,
    youtube=:you
    ';
    $arr = [
        "face" => $_POST["facebook"],
        "ins" => $_POST["instagram"],
        "twit" => $_POST["twitter"],
        "link" => $_POST["linkedin"],
        "git" => $_POST["github"],
        "you" => $_POST["youtube"]
    ];

    if ($CRUD->UPDATE("nizamlamalar", $column, null, $arr)) {
        $General->Status("sosial-sebekeler","ok");
        exit;
    } else {
        $General->Status("sosial-sebekeler","no");
        exit;
    }
}