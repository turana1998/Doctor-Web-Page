<?php 
ob_start();
date_default_timezone_set("Asia/Baku");
require_once 'admin/settings/db.php';

$db = new DBConnection;

/** Class */

require_once 'admin/settings/class/general.php';
require_once 'admin/settings/class/crud.php';

$General = new General;
$CRUD = new CRUD;

if($General->PageNameGet()!="index")
$General->REFERER();

$DTitle = $General->Title();


$PortfolioKat = $CRUD->Select("portfoliokateqoriya",1,"where status=:st",["st"=>1]);
$BlogKat = $CRUD->Select("blogkateqoriya",1,"where status=:st",["st"=>1]);

if(@$_GET["PKId"]!=null){
    $Portfolio = $CRUD->Select("portfolio",1,"where status=:st and kat_id=:id",["st"=>1,"id"=>@$_GET["PKId"]]);
    $Ad =  $CRUD->Select("portfoliokateqoriya",0,"where id=:id",["id"=>@$_GET["PKId"]])["Ad"];
    if(empty($Portfolio)){
        $General->Status("index","hmm");
    }
}

if(@$_GET["BKId"]!=null){
    $Blog = $CRUD->Select("blog",1,"where status=:st and kat_id=:id",["st"=>1,"id"=>@$_GET["BKId"]]);
    rsort($Blog);
    $Ad =  $CRUD->Select("blogkateqoriya",0,"where id=:id",["id"=>@$_GET["BKId"]])["Ad"];
    if(empty($Blog)){
        $General->Status("index","hmm");
    }
}

if(@$_GET["BId"]!=null){
    $Blog = $CRUD->Select("blog",0,"where status=:st and id=:id",["st"=>1,"id"=>@$_GET["BId"]]);
    $BlogKateqoriya =  $CRUD->Select("blogkateqoriya",0,"where id=:id",["id"=>$Blog["Kat_id"]]);
    if(empty($Blog)){
        $General->Status("index","hmm");
    }
}