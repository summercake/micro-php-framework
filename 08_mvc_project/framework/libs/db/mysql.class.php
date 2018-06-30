<?php

class mysql
{
/**
 * Error Function
 * @param string $error
 */
    public function err($error)
    {
        // die = echo + exit
        die('Sorry, You have some error and the reason is ' . $error);
    }

/**
 * Connection Function
 * @param string $config array($dbhost, $dbuser, $dbpwd, $dbname, $dbcharset)
 * @return return bool connect successfully or not
 */
    public function connect($config)
    {
        // var_dump($config);
        extract($config); // convert array to variables
        if (!($con = mysql_connect($dbhost, $dbuser, $dbpwd))) { // connect db
            $this->err(mysql_error());
        }
        if (!mysql_select_db($dbname, $con)) { // select db
            $this->err(mysql_error());
        }
        mysql_query('set name' . $dbcharset); // set db charset format
    }

/**
 * Execute SQL Function
 * @param string $sql
 * @return return bool execute and return successfully or not
 */
    public function query($sql)
    {
        if (!($query = mysql_query($sql))) { // execute sql
            $this->err($sql . "<br>" . mysql_error());
        } else {
            return $query;
        }
    }

/**
 * find multiple data
 * @param source $query the source that executed by query()
 * @return return array that only contains all rows data
 */
    public function findAll($query)
    {
        while ($result = mysql_fetch_array($query, MYSQL_ASSOC)) { // convert resource to array
            $list[] = $result;
        }
        return isset($list) ? $list : "";
    }

/**
 * find one piece of data
 * @param source $query the resource that executed by query()
 * @return return array that only contains one row data
 */
    public function findOne($query)
    {
        $result = mysql_fetch_array($query, MYSQL_ASSOC);
        return $result;
    }

/**
 * find specific row of data
 * @param source $query the resource that executed by query()
 * @return return array that only contains specific row of specific field data
 */
    public function findResult($query, $row = 0, $field = 0)
    {
        $result = mysql_result($query, $row, $field);
        return $result;
    }

/**
 * insert data
 * @param string $table name of table
 * @param array $arr add array
 */
    public function insert($table, $arr)
    {
        // $sql = "insert into TABLE NAMES values (DATA)";
        // mysql_query($sql)
        foreach ($arr as $key => $value) {
            $value = mysql_real_escape_string($value);
            $keyArr[] = "`" . $key . "`"; // store $key to $keyArr
            $valueArr[] = "'" . $value . "'"; // store $value to $valueArr
        }
        $keys = implode(",", $keyArr); // convert array to string
        $values = implode(",", $valueArr);
        $sql = "insert into " . $table . "(" . $keys . ") values (" . $values . ")";
        $this->query($sql);
        return mysql_insert_id();
    }

/**
 * update data
 * @param string $table name of table
 * @param array $arr update array
 * @param string $where condition
 */
    public function update($table, $arr, $where)
    {
        foreach ($arr as $key => $value) {
            $value = mysql_real_escape_string($value); // convert harmful characters
            $keyAndValueArr[] = "`" . $key . "`='" . $value . "'";
        }
        $keyAndValues = implode(",", $keyAndValueArr);
        $sql = "update " . $table . " set" . $keyAndValues . " where " . $where;
        $this->query($sql);
    }

/**
 * delete data
 * @param string $table name of table
 * @param string $where condition
 */
    public function del($table, $where)
    {
        $sql = "delete from " . $table . " where " . $where;
        $this->query($sql);
    }

}
