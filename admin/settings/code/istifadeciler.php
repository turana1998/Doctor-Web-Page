<?php 

$istifadeciler = $CRUD->Select("admin",1);

if(isset($_POST["ist_elave"])){
    $col = "
    AdSoyad=:x,
    email=:mail,
    sifre=:pass,
    sekil=:sekil,
    icazeler=:icaze
    ";
    $arr = [
        'x'=>$_POST["AdSoyad"],
        'mail'=>$_POST["email"],
        'pass'=>md5($_POST["sifre"]),
        'sekil'=>"img/user.png",
        'icaze'=>$_POST["icaze"]
    ];
    
    if($_POST["sifre"] == ""){
        $General->Status("istifadeci-elave","no");
    }
    else{
        $CRUD->Insert("admin",$col,$arr) ? $General->Status("istifadeciler","ok") : $General->Status("istifadeci-elave","no");
    }

}

if(isset($_POST["profilyenile"])){
    $olcu = $_FILES["sekil"]["size"];
    $tip = $_FILES["sekil"]["type"];
    $tmp = $_FILES["sekil"]["tmp_name"];
    $ad = $_FILES["sekil"]["name"];
    $ksekil = $_POST["ksekil"];
    $tipler = ["image/png","image/jpeg","image/gif"];
    $yol = "img/".$ad;
    $kohnesifre = md5($_POST["kohnesifre"]);
    $yenisifre = $_POST["yenisifre"];
    $yenisifretekrar = $_POST["yenisifretekrar"];
    $uppercase = preg_match('@[A-Z]@', $yenisifre);
    $lowercase = preg_match('@[a-z]@', $yenisifre);
    $number = preg_match('@[0-9]@', $yenisifre);
    $symbol = preg_match('@[#\W+#]@', $yenisifre);  
    if($kohnesifre != $CRUD->Select("admin", 0, "where email=:email", ["email"=>$_POST["email"]])["sifre"]){
        $General->Status("profil","no");
        exit;
    }
    if(!$uppercase || !$lowercase || !$number || !$symbol || strlen($yenisifre) < 8){
        $General->Status("profil","no");
        exit;
    }
    if($yenisifre != $yenisifretekrar){
        $General->Status("profil","no");
        exit;
    }
    if ($olcu > 0 && !in_array($tip,$tipler)) {
        $General->Status("profil","no");
        exit;
    }

    $column = '
    sifre=:sifre,
    sekil=:sekil
    where email=:mail
    ';
    $arr = [
        'sifre'=>md5($yenisifre),
        "sekil" => $olcu > 0 ? $yol : $ksekil,
        "mail"=>$_POST["email"]
    ];

    if ($CRUD->UPDATE("admin", $column, null, $arr)) {
        $olcu > 0 && $ksekil!="img/user.png" ? unlink($ksekil) : "";
        move_uploaded_file($tmp, $yol);
        $General->Status("profil","ok");
        exit;
    } else {
        $General->Status("profil","no");
        exit;
    }

}