<?php

include_once('controllers/Controllers_Page.php');
session_start();

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';


$controller = new Controllers_Page();
$controller->$action();
$controller->render();



