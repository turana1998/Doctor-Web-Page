<?php 

ob_start();
require_once '../db.php';

$db = new DBConnection;

/* Class */

require_once '../class/general.php';
require_once '../class/crud.php';

$General = new General;
$CRUD = new CRUD;

if(isset($_POST["pks"])){
    $arr = [];
    $data = $CRUD->Select("portfoliokateqoriya",1,null,null,"sira");
    for($i = 0; $i<count($data);$i++){ array_push($arr,$data[$i]["sira"]);}
    $data = json_encode($arr);
    print_r($data);
}

if(isset($_POST["ks"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->SELECT("portfoliokateqoriya",null,$where,$arr,"status")["status"];

    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("portfoliokateqoriya",$col,$where,$array);
    
}

if(isset($_POST["status"])){
    $id = $_POST["id"];
    $where = "where id=:id";
    $arr = ["id"=>$id];
    $st = $CRUD->Select("portfolio",null,$where,$arr,"status")["status"];
    $col = "status=:status";
    $array = [
        "status"=>$st==1 ? 0 : 1,
        "id"=>$id
    ];
   echo  $CRUD->UPDATE("portfolio",$col,$where,$array);
    
}