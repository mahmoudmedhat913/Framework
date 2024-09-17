<?php
require_once("vendor\autoload.php");
require_once(".inc/path.php");
require_once("framework/base.php");
$suppress_localhost = false;
$arrData = array_merge($_GET, $_POST);
$arrPayload = json_decode(file_get_contents('php://input'), true);

$page = $arrData['page']??'Task';
$action = $arrData['action']??'Task2';
$module = $arrData['module']??'cal';

$path = preg_replace('/([A-Z])/', '.$1', $page);
$path = strtolower($path);

$pathToModule = '';
$strClass = '\NS' . strtoupper($module) . '\\ClsCtrlPage' . ucfirst($page);
$obj = new $strClass($arrData, $arrPayload);
$obj->do_Action();