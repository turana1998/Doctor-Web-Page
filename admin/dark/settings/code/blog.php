<?php
$ksiyahi = $CRUD->SELECT("blogkateqoriya",1);
$siyahi = $CRUD->SELECT("blog",1);

if(isset($_POST['bkredakte'])){

    $col = "
    Ad=:ad,
    slug=:slug
    ";
    $whr = "where id =:id";
    $arr = [
        "ad"=>$_POST['ad'],
        "slug"=>$_POST['slug'],
        "id"=>$_POST['id']
    ];
    $CRUD->UPDATE("blogkateqoriya",$col,$whr,$arr) ? $General->Status("blog-kat-siyahi","ok") : $General->Status("blog-kat-siyahi","no");
}

if(@$_GET["sil"] == "ok"){
    $CRUD->DELETE("blogkateqoriya",@$_GET["id"]) ? $General->Status("blog-kat-siyahi","ok") : $General->Status("blog-kat-siyahi","no");
    $col ="status=:status";
    $where="where Kat_id=:Kat_id";
    $array=[
        'status'=>0,
        'Kat_id'=>@$_GET["id"]
    ];
    $CRUD->UPDATE("blog",$col,$where,$array);
}

if(@$_GET["BlogSil"] == "ok"){
    if($CRUD->DELETE("blog",@$_GET["id"])){
        unlink(@$_GET["sekil"]);
        $General->Status("blog-siyahi","ok");
    }
    else{
        $General->Status("blog-siyahi","no");
    }
}

if(isset($_POST['blog_kat_elave'])){

    $col="
    Ad=:ad,
    slug=:slug
    ";
    $arr=[
        'ad'=>$_POST['ad'],
        'slug'=>$_POST['slug']
    ];

    $CRUD->INSERT("blogkateqoriya", $col, $arr) ? $General->Status("blog-kat-siyahi","ok") : $General->Status("blog-kat-elave","no");
}

if(isset($_POST['blog_elave'])){

    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $tipler = ["image/png","image/jpeg","image/gif"];
    $yol = "../../sekil/blog/".rand(100,99999)."-".$ad;
    if (!in_array($tip,$tipler)) {
        $General->Status("blog-elave","no");
        exit;
    }

    $col = "
    Kat_id=:id,
    Basliq=:basliq,
    Mezmun=:mezmun,
    Sekil=:sekil,
    tarix=:tarix,
    slug=:slug
    ";
    
    $arr = [
        'id'=>$_POST['kateqoriya'],
        'basliq'=>$_POST['basliq'],
        'mezmun'=>$_POST['mezmun'],
        'sekil'=>substr($yol,6),
        'tarix'=>date('Y-m-d H:i:s'),
        'slug'=>$General->SEO($_POST['basliq'])
    ];
    if ($CRUD->INSERT("blog", $col, $arr)) {
        move_uploaded_file($tmp, $yol);
        $General->Status("blog-siyahi","ok");
        exit;
    } else {
        $General->Status("blog-elave","no");
        exit;
    }
}

if(@$_GET["rdk"] == "ok"){
    $rdk = $CRUD->Select("blog",0,"where id=".@$_GET["id"]);
}

if(isset($_POST['blog_redakte'])){

    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $tipler = ["image/png","image/jpeg","image/gif"];
    $yol = "../../sekil/blog/".rand(100,99999)."-".$ad;
    $ksekil = $_POST["kohne_sekil"];
    $id = $_POST["id"];
    if ($olcu>0 && !in_array($tip,$tipler)) {
        $General->Status("blog-siyahi","no");
        exit;
    }

    $col = "
    Kat_id=:id,
    Basliq=:basliq,
    Mezmun=:mezmun,
    Sekil=:sekil,
    slug=:slug
    where id = {$id}
    ";
    
    $arr = [
        'id'=>$_POST['kateqoriya'],
        'basliq'=>$_POST['basliq'],
        'mezmun'=>$_POST['mezmun'],
        'sekil'=>$olcu >0 ? substr($yol,6) : substr($ksekil,6),
        'slug'=>$_POST['slug']
    ];
    if ($CRUD->UPDATE("blog", $col,null , $arr)) {
        if($olcu>0){
            unlink($ksekil);
            move_uploaded_file($tmp, $yol);
        }
        $General->Status("blog-siyahi","ok");
        exit;
    } else {
        $General->Status("blog-siyahi","no");
        exit;
    }
}