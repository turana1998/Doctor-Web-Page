<?php 
session_start();
ob_start();
date_default_timezone_set("Asia/Baku");
require_once '../settings/db.php';

$db = new DBConnection;

/** Class */

require_once '../settings/class/general.php';
require_once '../settings/class/crud.php';
require_once '../settings/class/login.php';

$General = new General;
$CRUD = new CRUD;
$Login = new Login;

if($General->PageNameGet() != "index")
    $General->REFERER();

if($Login->CheckSession($_SESSION["user_email"]))
    $General->Status("logout","err");
