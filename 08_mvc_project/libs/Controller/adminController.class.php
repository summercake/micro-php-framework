<?php
class adminController
{
    public $auth;
    public function test()
    {
        echo "hello";
    }

    public function __construct()
    {
        // check whether login or not

        // if not login page and not login, it must redirect to login page
        $authobj = M('auth');
        $this->auth = $authobj->getauth();
        if (empty($this->auth) && (PC::$method != 'login')) {

            // echo "<script>alert('HERE!!!!');</script>";
            // var_dump($this->auth);
            // echo "<script>alert('HERE!!!!');</script>";
            // echo "<script>alert('HERE!!!!');</script>";

            $this->showmessage('Not Login !!!!', 'admin.php?controller=admin&method=login');
        }
    }

    public function login()
    {
        if ($_POST) {
            // login
            $this->checklogin();
        } else {
            // display login page
            VIEW::display('admin/login.html');
        }

    }

    public function checklogin()
    {
        $authobj = M('auth');
        if ($authobj->loginsubmit()) {
            $this->showmessage('success!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!', 'admin.php?controller=admin&method=index');
        } else {
            $this->showmessage('fail', 'admin.php?controller=admin&method=login');
        }
    }

    public function index()
    {
        // get news model instance
        $newobj = M('news');
        // get all news count number
        $newsnum = $newobj->count();
        // assign a variable and value for view engine
        VIEW::assign(array('newsnum' => $newsnum));
        // display page result
        VIEW::display('admin/index.html');
    }

    public function logout()
    {
        $authobj = M('auth');
        $authobj->logout();
        $this->showmessage('logout success', 'admin.php?controller=admin&method=login');
    }

    private function showmessage($info, $url)
    {
        echo "<script>console.log('$info');window.location.href='$url'</script>";
        exit;
    }

    public function newsadd()
    {
        if (empty($_POST)) {
            if (isset($_GET['id'])) {
                $data = M('news')->getnewsinfo($_GET['id']);
            } else {
                $data = array();
            }
            VIEW::assign(array('data' => $data));
            VIEW::display('admin/newsadd.html');
        } else {
            $this->newssubmit();
        }

    }

    public function newslist()
    {
        $data = $this->getnewslist();
        VIEW::assign(array('data' => $data));
        VIEW::display('admin/newslist.html');
    }

    private function newssubmit()
    {
        extract($_POST);
        if (empty($title) || empty($content)) {
            $this->showmessage('请把新闻标题、内容填写完整再提交！', 'admin.php?controller=admin&method=newsadd');
        }
        $title = daddslashes($title);
        $content = daddslashes($content);
        $author = daddslashes($author);
        $from = daddslashes($from);
        $newsobj = M('news');
        $data = array(
            'title' => $title,
            'content' => $content,
            'author' => $author,
            'from' => $from,
            'dateline' => time(),
        );
        if ($_POST['id'] != '') {
            $newsobj->update($data, intval($_POST['id']));
            $this->showmessage('修改成功！', 'admin.php?controller=admin&method=newslist');
        } else {
            $newsobj->insert($data);
            $this->showmessage('添加成功！', 'admin.php?controller=admin&method=newslist');
        }
    }

    public function newsdel()
    {
        if (intval($_GET['id'])) {
            $this->delnews();
            $this->showmessage('删除新闻成功！', 'admin.php?controller=admin&method=newslist');
        }
    }

    private function delnews()
    {
        $newsobj = M('news');
        return $newsobj->del_by_id(intval($_GET['id']));
    }

    public function getnewsinfo($id)
    {
        if (empty($id)) {
            return array();
        } else {
            $id = intval($id);
            $sql = 'select * from ' . $this->_table . ' where id = ' . $id;
            return DB::findOne($sql);
        }
    }

    private function getnewslist()
    {
        $newsobj = M('news');
        return $newsobj->findAll_orderby_dateline();
    }

}
