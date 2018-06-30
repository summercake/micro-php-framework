<?php
function C($name, $method)
{
    require_once './libs/Controller/' . $name . 'Controller.class.php';
    // $testController = new testController();
    // $testController->show();
    // eval() 将字符串转换为PHP Sentences
    eval('$obj = new ' . $name . 'Controller(); $obj ->' . $method . '();');
}

C('test', 'show');

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
