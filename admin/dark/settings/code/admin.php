<?php 
ob_start();
date_default_timezone_set("Asia/Baku");
require_once '../settings/db.php';

$db = new DBConnection;

/** Class */

require_once '../settings/class/general.php';
require_once '../settings/class/crud.php';

$General = new General;
$CRUD = new CRUD;

if($General->PageNameGet() != "index")
    $General->REFERER();