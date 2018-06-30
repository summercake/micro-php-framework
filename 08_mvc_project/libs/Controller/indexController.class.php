<?php
class indexController
{
    public function index()
    {
        $newsobj = M('news');
        $data = $newobj->get_news_list();
        VIEW::assign(array('data' => $data));
        VIEW::display('index/index.html');
    }

    public function test()
    {
        echo "hello";
    }
}
