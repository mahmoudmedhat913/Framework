<?php
define("PROJECT_PATH_IN_HARD", "E:/wamp64/www");
define("PROJECT_NANE", "hospital_version1");


define("RUN_MODE", "");

spl_autoload_register('autoload');
$project = explode('/', $_SERVER['REQUEST_URI'])[1];
$intObjectNumber = 1;

function autoload($className){
    $project = explode('/', $_SERVER['REQUEST_URI'])[1];

    $extension = ".php";

    $dir = substr($className, 0, strpos($className, "\\"));
    $className = str_replace("{$dir}\\", "", $className);

    if ($dir == 'NSFWK') {
        $path = $_SERVER["DOCUMENT_ROOT"] . "/{$project}/framework/";
    } else {
        $dir = str_replace("NS", '', $dir);
        $dir = strtolower($dir);

        $path = $_SERVER["DOCUMENT_ROOT"] . "/{$project}/modules/{$dir}/";
        if ($GLOBALS['intObjectNumber'] == 1) {
            $GLOBALS['pathToModule'] = $path;
            $GLOBALS['intObjectNumber'] = 2;
        }else if (empty($dir)) {
            $path = $GLOBALS['pathToModule'];
        }

        $className = str_replace("Cls", "", $className);
        $newClassName = str_replace("Ctrl", "", $className);
        if ($newClassName != $className) {
            $path .= "controller/";
            $className = $newClassName;
            $newClassName = str_replace("Page", "", $className);
            if ($newClassName != $className) {
                $path .= "page/";
                $className = $newClassName;
            }
        }else {
            // need to handel the senario that the class is not exist nither controller nor model
            $path .= "model/";
            $className = str_replace("Bll", "", $className);
            $className = str_replace("Filter", "", $className);
        }
        $className = preg_replace('/([A-Z])/', '.$1', $className);
        $className = strtolower($className);
        $className = ltrim($className, '.');
    }

    $fullPath = $path . $className . $extension;
    require_once($fullPath);
}

define("PROJECT_PATH", '\\' . $project);
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . '\\' . $project);
define("TEMP_PATH", ROOT_PATH . '/temp');
