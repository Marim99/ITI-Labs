<?php

class MySQLHandler implements DBHandler
{

    private $_DB_handler;
    private $_table;
    private $_primary_key;
    public function __construct($table, $primary_key = "id")
    {
        $this->_table = $table;
        $this->connect();
        $this->_primary_key = $primary_key;
    }

    public function connect()
    {
        try {
            $handler = mysqli_connect(__HOST__, __USER__, __PASS__, __DB__, 3307);
            if ($handler) {
                $this->_DB_handler = $handler;
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {

            die("somthing went wrong");
        }
    }
    public function disconnect()
    {
        if ($this->_DB_handler)
            mysqli_close($this->_DB_handler);
    }

    public function get_all_items_paginated($fields = array(), $start = 0)
    {
        $table = $this->_table;
        if (empty($fields)) {
            $sql = "select * from `$table`";
        } else {
            $sql = "select ";
            foreach ($fields as $f) {
                $sql .= " `$f`, ";
            }
            $sql .= "from  `$table` ";
            $sql = str_replace(", from", "from", $sql);
        }
        $sql .= "limit $start," . __RECORDS_PER_PAGE__;
        return $this->get_results($sql);
    }
    public function get_number_of_rows($table)
    {
        $_handler_results = mysqli_query($this->_DB_handler, "select * from `$table`");
        $rows_number = mysqli_num_rows($_handler_results);
        return $rows_number;
    }
    public function search($column, $column_value)
    {
        $table = $this->_table;
        $sql = "select * from `$table` where `$column` like  '%" . $column_value . "%' ";
        return $this->get_results($sql);
    }

    public function get_item_by_id($id)
    {

        $primary_key = $this->_primary_key;

        $table = $this->_table;
        $sql = "select * from `$table` where `$primary_key` = '$id' ";

        return $this->get_results($sql);
    }
    public function delete($id)
    {
        $table = $this->_table;
        $primary_key = $this->_primary_key;
        $sql = "delete  from `" . $table . "` where `" . $primary_key . "` = $id";
        $this->debug($sql);
        if (mysqli_query($this->_DB_handler, $sql)) {
            // $this->disconnect();
            return true;
        } else {
            // $this->disconnect();
            return false;
        }
    }

    public function save($new_values)
    {

        if (is_array($new_values)) {

            $table = $this->_table;
            $id = (int)uniqid() . rand(10000, 99999);
            $sql1 = "insert into `$table` (`id`,";
            $sql2 = " values ($id ,";
            foreach ($new_values as $key => $value) {
                $sql1 .= "`$key` ,";
                if (is_numeric($value))
                    $sql2 .= " $value ,";
                else
                    $sql2 .= " '" . $value . "' ,";
            }
            $sql1 = $sql1 . ") ";
            $sql2 = $sql2 . ") ";
            $sql1 = str_replace(",)", ")", $sql1);
            $sql2 = str_replace(",)", ")", $sql2);
            $sql = $sql1 . $sql2;


            if (mysqli_query($this->_DB_handler, $sql)) {
                $this->disconnect();
                return true;
            } else {
                $this->disconnect();
                return false;
            }
        }
    }

    private function get_results($sql)
    {
        $this->debug($sql);
        $_handler_results = mysqli_query($this->_DB_handler, $sql);
        $_arr_results = array();
        $rows_number = mysqli_num_rows($_handler_results);

        if ($_handler_results) {
            while ($row = mysqli_fetch_array($_handler_results, MYSQLI_ASSOC)) {

                $_arr_results[] = array_change_key_case($row);
            }
            // $this->disconnect();
            return $_arr_results;
        } else {
            // $this->disconnect();
            return false;
        }
    }



    private function debug($sql)
    {
        if (__Debug__Mode__ === 1)
            echo "<h5>Sent Query: </h5>" . $sql . "<br/> <br/>";
    }
}
