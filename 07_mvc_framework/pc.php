<?php
// require_once 'function.php';
// require_once 'config.php';
// $view = ORG('smarty/', 'Smarty', $viewconfig);
// $controllerAllow = array('test', 'index');
// $methodAllow = array('test', 'index', 'show');
// $controller = in_array($_GET['controller'], $controllerAllow) ? daddslashes($_GET['controller']) : index;
// $method = in_array($_GET['method'], $methodAllow) ? daddslashes($_GET['method']) : index;
// C($controller, $method);

$currentdir = dirname(__FILE__);
include_once $currentdir . '/include.list.php';
foreach ($paths as $path) {
    include_once $currentdir . '/' . $path;
}
class PC
{
    public static $controller;
    public static $method;
    public static $config;
    private static function init_db()
    {
        DB::init('mysql', self::$config['dbconfig']);
    }
    private static function init_view()
    {
        VIEW::init('Smarty', self::$config['viewframework']);
    }
    private static function init_controller()
    {
        self::$controller = isset($_GET['controller']) ? daddslashes($_GET['controller']) : 'index';
    }
    private static function init_method()
    {
        self::$controller = isset($_GET['method']) ? daddslashes($_GET['method']) : 'index';
    }
    public static function run($config)
    {
        self::$config = $config;
        self::init_db();
        self::init_view();
        self::init_controller();
        self::init_method();
        C(self::$controller, self::$method);
    }
}
