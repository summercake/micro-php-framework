<?php
class testController
{
    public function show()
    {
        global $view;
        $testModel = M('test');
        $data = $testModel->get();
        $view->assign('str', 'hahahaha');
        $view->display('test.tpl');
    }
}
