<?php 

ob_start();
require_once '../db.php';

$db = new DBConnection;

/* Class */

require_once '../class/general.php';
require_once '../class/crud.php';

$General = new General;
$CRUD = new CRUD;

if(isset($_POST["serh"])){
    $id = $_POST["id"];

   $x = $CRUD->SELECT("comment",0,"where id=:id",["id" =>$_POST['id']]);
   echo json_encode($x);
}

if(isset($_POST["status"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("comment",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("comment",$col,$where,$array);
}