<?php
class testController
{
    public function show()
    {
        $testModel = M('test');
        $data = $testModel->get();
        $testView = V('test');
        $testView->display($data);
    }
}
