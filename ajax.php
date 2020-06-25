<?php 

ob_start();
require_once 'admin/settings/db.php';

$db = new DBConnection;

/* Class */

require_once 'admin/settings/class/general.php';
require_once 'admin/settings/class/crud.php';
//eseblesme 
$General = new General;
$CRUD = new CRUD;
if(isset($_POST["search"])){
    $data =  addslashes(htmlspecialchars($_POST["val"]));
    if($data!="" or $data!=null){
        $value = $CRUD->Search("blogkateqoriya","Ad",$data);
        for($i=0;$i<count($value);$i++){ 
        echo '<li><a href="">'.$value[$i]["Ad"].'</a></li>';
        }
        
        
    }
}


?>