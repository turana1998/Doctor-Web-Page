<?php
$csiyahi = $CRUD->SELECT("comment",1);
rsort($csiyahi);

if(isset($_POST["cavab"])){

    $col = "
    cavab=:cavab,
    cvb_tarixi=:tarix
    ";
    $whr = "where id =:id";
    $arr = [
        "cavab"=>$_POST["my_comment"],
        "tarix"=>date('Y-m-d H:i:s'),
        "id"=>$_POST['id_yaz']
    ];
    $CRUD->UPDATE("comment",$col,$whr,$arr) ? $General->Status("comment","ok") : $General->Status("comment","ok");
      
}

if(@$_GET["SerhSil"] == "ok"){
    if($CRUD->DELETE("comment",@$_GET["id"])){
        if(@$_GET["sekil"] != "../../sekil/comment/user.png"){
            unlink(@$_GET["sekil"]);
        }
        $General->Status("comment","ok");
    }
    else{
        $General->Status("comment","no");
    }
}
