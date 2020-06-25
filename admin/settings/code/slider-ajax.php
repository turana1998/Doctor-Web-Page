<?php 

ob_start();
require_once '../db.php';

$db = new DBConnection;

/* Class */

require_once '../class/general.php';
require_once '../class/crud.php';

$General = new General;
$CRUD = new CRUD;

if(isset($_POST["ss"])){
    $arr = [];
    $data = $CRUD->Select("slider",1,null,null,"sira");
    for($i = 0; $i<count($data);$i++){ array_push($arr,$data[$i]["sira"]);}
    $data = json_encode($arr);
    print_r($data);
}

if(isset($_POST["status"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->Select("slider",null,$where,$arr,"status")["status"];
    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("slider",$col,$where,$array);
    
}