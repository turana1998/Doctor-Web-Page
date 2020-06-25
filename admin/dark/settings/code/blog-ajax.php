<?php 

ob_start();
require_once '../db.php';

$db = new DBConnection;

/** Class */

require_once '../class/general.php';
require_once '../class/crud.php';

$General = new General;
$CRUD = new CRUD;

if(isset($_POST["ks"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("blogkateqoriya",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("blogkateqoriya",$col,$where,$array);
}
if(isset($_POST["status"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("blog",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("blog",$col,$where,$array);
}

if(isset($_POST["bax"])){
    $id = $_POST["id"];

   $x = $CRUD->SELECT("blog",0,"where id=:id",["id" =>$_POST['id']]);
   echo json_encode($x);
}