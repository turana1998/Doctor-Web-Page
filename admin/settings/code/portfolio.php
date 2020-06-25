<?php
$ksiyahi = $CRUD->SELECT("portfoliokateqoriya",1);
$psiyahi = $CRUD->SELECT("portfolio",1);
if(isset($_POST["port_kat_elave"])){
    $col = "
        Ad=:x,
        sira=:sira,
        slug=:slug
    ";
    $arr = [
        "x"=>$_POST["ad"],
        "sira"=>$_POST["sira"],
        "slug"=>$_POST["slug"]
    ];
    $CRUD->INSERT("portfoliokateqoriya",$col,$arr) ? $General->Status("port-kat-siyahi","ok") :  $General->Status("port-kat-elave","no");
}

if(@$_GET["sil"]=="ok"){
    $CRUD->DELETE("portfoliokateqoriya",@$_GET["id"]) ? $General->Status("port-kat-siyahi","ok") : $General->Status("port-kat-siyahi","no");
    $where = "where kat_id=:kat_id";
    $col = "status=:status";
    $array = [
        "status"=>0,
        "kat_id"=>@$_GET["id"]
    ];
    $CRUD->UPDATE("portfolio",$col,$where,$array);
}

if(@$_GET["delete"]=="ok"){
    if($CRUD->DELETE("portfolio",@$_GET["id"])){
        unlink(@$_GET["sekil"]);
        $General->Status("port-siyahi","ok");
    }
    else{
        $General->Status("port-siyahi","no");
    }
}

if(isset($_POST["port_elave"])){
    $ad = $_FILES["sekil"]["name"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tipler = ["image/png","image/jpeg"];
    $yol = "../../sekil/portfolio/".rand(100,9999)."-".$ad;
    if($olcu==0){
        $General->Status("port-elave","no");
        exit;
    }
    if(!in_array($tip,$tipler)){
        $General->Status("port-elave","no");
        exit;
    }

    $col = "
    kat_id=:id,
    Adi=:ad,
    link=:link,
    sekil=:sekil
    ";
    $arr = [
        "id"=>$_POST["katid"],
        "ad"=>$_POST["ad"],
        "link"=>$_POST["link"],
        "sekil"=>substr($yol,6)
    ];
    if($CRUD->INSERT("portfolio",$col,$arr)){
        move_uploaded_file($tmp,$yol);
        $General->Status("port-siyahi","ok");
        exit;
    }
    else{
        $General->Status("port-elave","no");
        exit;
    }
}

if(isset($_POST['pkredakte'])){
    $col = "
    Ad=:ad,
    sira=:sira,
    slug=:slug
    ";
    $whr = "where id =:id";
    $sira = $_POST['portkatsira_nomre'];
    $arr = [
        "ad"=>$_POST['ad'],
        "sira"=>$_POST['portkatsira'] == 0 ? $sira: $_POST['portkatsira'],
        "slug"=>$_POST['slug'],
        "id"=>$_POST['id']
    ];
    $CRUD->UPDATE("portfoliokateqoriya",$col,$whr,$arr) ? $General->Status("port-kat-siyahi","ok") : $General->Status("port-kat-siyahi","no");
}

if(isset($_POST['predakte'])){
    $ad = $_FILES["sekil_red"]["name"];
    $tmp = $_FILES["sekil_red"]["tmp_name"];
    $olcu = $_FILES["sekil_red"]["size"];
    $tip = $_FILES["sekil_red"]["type"];
    $tipler = ["image/png","image/jpeg"];
    $yol = "../../sekil/portfolio/".rand(100,9999)."-".$ad;
    if(!in_array($tip,$tipler) && $olcu != 0){
        $General->Status("port-siyahi","no");
        exit;
    }
    $col = "
    kat_id=:katid,
    Adi=:ad,
    link=:link,
    sekil=:sekil
    ";
    $whr = "where id=:id";
    $kateqoriya = $_POST['port_id_kateqoriya'];
    $ksekil = $_POST['ksekil'];
    $arr = [
        "katid"=>$_POST['portid'] == 0 ? $kateqoriya : $_POST['portid'],
        "ad"=>$_POST['ad'],
        "link"=>$_POST['link'],
        "sekil"=>$olcu == 0 ? $ksekil : substr($yol,6),
        "id"=>$_POST['id']
    ];
    if($CRUD->UPDATE("portfolio",$col,$whr,$arr)){
        $olcu > 0 ? unlink("../../".$ksekil) : "";
        move_uploaded_file($tmp,$yol);
        $General->Status("port-siyahi","ok");
        exit;
    }
    else{
        $General->Status("port-siyahi","no");
        exit;
    }
}