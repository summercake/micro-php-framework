<?php
class adminModel
{

    //define table name
    public $_table = 'admin';

    // get userinfo by username
    public function findOne_by_username($username)
    {
        $sql = 'select * from ' . $this->_table . ' where username="' . $username . '"';
        return DB::findOne($sql);
    }
}
