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

$Nizam = $CRUD->Select("nizamlamalar");

//$PortfolioKat = $CRUD->Select("portfoliokateqoriya",1,"where status=:st",["st"=>1]);
$BlogKat = $CRUD->Select("blogkateqoriya",1,"where status=:st",["st"=>1]);
$BlogSiyahi = $CRUD->Select("blog",1,"where status=:st",["st"=>1]);
$SonElave = $CRUD->Select("blog",1,"where status=:st",["st"=>1]);
$Services = $CRUD->Select("services",1,"where status=:st",["st"=>1]);
$Slider = $CRUD->Select("slider",1,"where status=:st",["st"=>1]);
rsort($SonElave);
rsort($BlogSiyahi);

/*if(@$_GET["PKId"]!=null){
    $Portfolio = $CRUD->Select("portfolio",1,"where status=:st and kat_id=:id",["st"=>1,"id"=>@$_GET["PKId"]]);
    $Ad =  $CRUD->Select("portfoliokateqoriya",0,"where id=:id",["id"=>@$_GET["PKId"]])["Ad"];
    if(empty($Portfolio)){
        $General->Status("index","hmm");
    }
}*/

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
    $Comment = $CRUD->Select("comment",1,"where status=:st and Blog_Id=:id",["st"=>1,"id"=>$Blog["id"]]);
     rsort($Comment); 
                        
}

if(isset($_POST["gonder"])){
    $colums = "
    AdSoyad=:w,
    email=:email,
    message=:mess
    ";
    $arr = [
        "w"=>$_POST["name"],
        "email"=>$_POST["email"],
        "mess"=>$_POST["message"]
    ];
    $CRUD->INSERT("form",$colums,$arr) ? $General->Status("contact","ok") : $General->Status("contact","no");
}
// Comment 
if(isset($_POST["send_comment"])){
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $tipler = ["image/png","image/jpeg"];
    $yol = "sekil/comment/".rand(100,99999)."-".$ad;

    if (!in_array($tip,$tipler) && $olcu>0) {
        $General->StatusBlog("blog-".$_POST["slug"]."-".$_POST["id"],"no");
        exit;
    }

    $colums = "
    Blog_Id=:id,
    AdSoyad=:ad,
    email=:email,
    serh=:serh,
    sekil=:sekil,
    tarix=:tarix
    ";
    $arr = [
        "id"=>$_POST["id"],
        "ad"=>$_POST["name"],
        "email"=>$_POST["email"],
        "serh"=>$_POST["serh"],
        "sekil"=>$olcu > 0 ? $yol :"sekil/comment/user.png" ,
        "tarix"=>date('Y-m-d H:i:s')
    ];
    
    if ($CRUD->INSERT("comment", $colums, $arr)) {
        if($olcu>0){
            move_uploaded_file($tmp, $yol);
        }
        $General->StatusBlog("blog-".$_POST["slug"]."-".$_POST["id"],"send");
        exit;
    } else {
        $General->StatusBlog("blog-".$_POST["slug"]."-".$_POST["id"],"no");
        exit;
    }
}

