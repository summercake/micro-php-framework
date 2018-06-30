<?php
function C($name, $method)
{
    require_once './libs/Controller/' . $name . 'Controller.class.php';
    // $testController = new testController();
    // $testController->show();
    // eval() 将字符串转换为PHP Sentences
    eval('$obj = new ' . $name . 'Controller(); $obj ->' . $method . '();');
}

// C('test', 'show');

function M($name)
{
    require_once './libs/Model/' . $name . 'Model.class.php';
    eval('$obj = new ' . $name . 'Model();');
    return $obj;
}

function V($name)
{
    require_once './libs/View/' . $name . 'View.class.php';
    eval('$obj = new ' . $name . 'View();');
    return $obj;
}

function daddslashes($str)
{
    return (!get_magic_quotes_gpc()) ? addslashes($str) : $str;
}

/***
 * $path is path
 * $name is third party class name
 * $params is an array that contains the value that obj have
 */
function ORG($path, $name, $params = array())
{
    require_once './libs/ORG/' . $path . $name . '.class.php';
    $obj = new $name();
    if (!empty($params)) {
        foreach ($params as $key => $value) {
            $obj->$key = $value;
        }
    }
    return $obj;
}
