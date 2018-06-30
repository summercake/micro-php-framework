<?php
class newsModel
{
    public $_table = 'news';
    public function count()
    {
        $sql = 'select count(*) from ' . $this->_table;
        return DB::findResult($sql, 0, 0);
    }

    public function findAll_orderby_dateline()
    {
        $sql = 'select * from ' . $this->_table . ' order by dateline desc';
        return DB::findAll($sql);
    }

    public function findOne_by_id($id)
    {
        $sql = 'select * from ' . $this->_table . ' where id=' . $id;
        return DB::findOne($sql);
    }

    public function del_by_id($id)
    {
        return DB::del($this->_table, 'id=' . $id);
    }

    public function insert($data)
    {
        return DB::insert($this->_table, $data);
    }

    public function update($data, $id)
    {
        return DB::update($this->_table, $data, 'id=' . $id);
    }
}
