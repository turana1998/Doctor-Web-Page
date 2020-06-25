<?php

ob_start();
require_once '../db.php';

$db = new DBConnection;

/* Class */

require_once '../class/general.php';
require_once '../class/crud.php';

$General = new General;
$CRUD = new CRUD;


if(isset($_POST["st"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("admin",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("admin",$col,$where,$array);
}


if(isset($_POST["ksifre"])){
    $email=$_POST["email"];
    $sifre=md5($_POST["sifre"]);
    $where="where email=:email";
    $arr=["email"=>$email];
    $sfr = $CRUD->Select("admin",null,$where,$arr,"sifre")["sifre"];

    if($sfr==$sifre){
        echo 1;
    }
    else{
        echo 0;
    }
}