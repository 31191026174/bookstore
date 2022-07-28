<?php
session_start();
require "./Core/Database.php";
require "./Models/BaseModel.php";
require "./Controllers/BaseController.php";
require "./Helper/commons.php";


$controllerName= ucfirst(strtolower($_REQUEST['controller'] ?? 'index' ).'Controller');
$actionName =$_REQUEST['action']??'index';

require "./Controllers/${controllerName}.php";

$controllerObject= new $controllerName();
$controllerObject->$actionName();

