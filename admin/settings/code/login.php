<?php 
session_start();
ob_start();
require_once '../settings/db.php';

$db = new DBConnection;

/** Class */

require_once '../settings/class/general.php';
require_once '../settings/class/crud.php';
require_once '../settings/class/login.php';

$General = new General;
$CRUD = new CRUD;
$Login = new Login;

if(isset($_POST["enter"])){
    $Login->AdminGiris($_POST["email"],$_POST["pass"]) ? $General->Status("index","welcome") : $General->Status("login","err");
}