<?php
$ssiyahi = $CRUD->SELECT("slider",1);

if(isset($_POST["slider_elave"])){
    $ad = $_FILES["sekil"]["name"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tipler = ["image/png","image/jpeg"];
    $yol = "../../sekil/slider/".rand(100,9999)."-".$ad;
    $pixel = getimagesize($tmp);
    if(!in_array($tip,$tipler)){
        $General->Status("slider-elave","no");
        exit;
    }

    $col = "
    basliq=:basliq,
    alt_basliq=:alt_basliq,
    sira=:sira,
    sekil=:sekil
    ";
    $arr = [
        "basliq"=>$_POST["basliq"],
        "alt_basliq"=>$_POST["alt_basliq"],
        "sira"=>$_POST["sira"],
        "sekil"=>substr($yol,6)
    ];
    if($pixel[0] == 1920 && $pixel[1] == 1100){
        if($CRUD->INSERT("slider",$col,$arr)){
            move_uploaded_file($tmp,$yol);
            $General->Status("slider-siyahi","ok");
            exit;
        }
        else{
            $General->Status("slider-elave","no");
            exit;
        }
    }
    else{
        $General->Status("slider-elave","no");
        exit;
    }   
}

if(@$_GET["sil"]=="ok"){
    if($CRUD->DELETE("slider",@$_GET["id"])){
        unlink(@$_GET["sekil"]);
        $General->Status("slider-siyahi","ok");
    }
    else{
        $General->Status("slider-siyahi","no");
    }
}

if(isset($_POST['sredakte'])){
    $ad = $_FILES["sekil_red"]["name"];
    $tmp = $_FILES["sekil_red"]["tmp_name"];
    $olcu = $_FILES["sekil_red"]["size"];
    $tip = $_FILES["sekil_red"]["type"];
    $tipler = ["image/png","image/jpeg"];
    $yol = "../../sekil/slider/".rand(100,9999)."-".$ad;
    $pixel = getimagesize($tmp);
    $sira = $_POST['sira_nomresi'];
    $ksekil = $_POST['ksekil'];
    $whr = "where id=:id";
    if(!in_array($tip,$tipler) && $olcu != 0){
        $General->Status("slider-siyahi","no");
        exit;
    }
    $col = "
    basliq=:basliq,
    alt_basliq=:alt_basliq,
    sira=:sira,
    sekil=:sekil
    ";
    $arr = [
        "basliq"=>$_POST["basliq"],
        "alt_basliq"=>$_POST["alt_basliq"],
        "sira"=>$_POST["slider_sira"] == 0 ? $sira : $_POST['slider_sira'],
        "sekil"=>$olcu == 0 ? $ksekil : substr($yol,6),
        "id"=>$_POST['id']
    ];
    if($olcu>0 && $pixel[0] == 1920 && $pixel[1] == 1100){
        if($CRUD->UPDATE("slider",$col,$whr,$arr)){
            $olcu > 0 ? unlink("../../".$ksekil) : "";
            move_uploaded_file($tmp,$yol);
            $General->Status("slider-siyahi","ok");
            exit;
        }
        else{
            $General->Status("slider-siyahi","no");
            exit;
        }
    }
    else if($olcu == 0){
        if($CRUD->UPDATE("slider",$col,$whr,$arr)){
            $olcu > 0 ? unlink("../../".$ksekil) : "";
            move_uploaded_file($tmp,$yol);
            $General->Status("slider-siyahi","ok");
            exit;
        }
        else{
            $General->Status("slider-siyahi","no");
            exit;
        }

    }
    else{
        $General->Status("slider-siyahi","no");
        exit;
    }  

}