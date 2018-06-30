<?php
require_once '../smarty/Smarty.class.php';
$smarty = new Smarty();
// Smarty 口诀 “五配置两方法”
// 五配置
$smarty->left_delimiter = "{"; // 左定界符
$smarty->right_delimiter = "}"; // 右定界符
$smarty->template_dir = "tpl"; // html模板的地址
$smarty->compile_dir = "template_c"; // 模板编译生成的文件
$smarty->cache_dir = "cache"; // 缓存
// 以下是开启缓存的另两个配置。因为通常不用smarty的缓存机制，所以此项为了解。
// $smarty->caching = true; // 开启缓存
// $smarty->cache_lifetime = 120; // 缓存时间
$smarty->assign('articletitle', 'title');
$articlecontent = array('content' => 'content', 'level' => '1111');
$arr = array('title' => 'smarty', 'author' => 'jack', 'articlecontent' => $articlecontent);
$smarty->assign('arr', $arr);
$smarty->assign('time', time());
$smarty->assign('default', '');
$smarty->assign('url', 'http://www.google.com');
$smarty->assign('score', '91');
$smarty->assign('enter', 'hello
world
!!!');
$articlelist = array(
    array(
        'title' => "1st article",
        'author' => "jack",
        'content' => "this is jack's article",
    ),
    array(
        'title' => "2nd article",
        'author' => "mike",
        'content' => "this is mike's article",
    ),
    array(
        'title' => "3rd article",
        'author' => "john",
        'content' => "this is john's article",
    ),
);
class MyObj
{
    public function method($param)
    {
        return $param[0] . ' already ' . $param[1];
    }
}
$myobj = new MyObj();
$smarty->assign('myobj', $myobj);
$smarty->assign('articlelist', $articlelist);
$smarty->assign('str', 'abcdfeg');
function test($param)
{
    $p1 = $param['p1'];
    $p2 = $param['p2'];
    return '---' . $p1 . '---' . $p2 . '---';
}
$smarty->registerPlugin('function', 'f_test', 'test');
$smarty->assign('string', 'abc，df。egdsagsdfagfdsghdfshfdhherfghdsfgbvdsf');
$smarty->display('test.tpl');
