<?php

class ContainFilter implements FilterInterface
{
    private $column, $search;

    public function __construct($column, $search)
    {
        $this->column = $column;
        $this->search = $search;
    }

    public function get_sql()
    {
        return "'" . $this->column . "' like '" . $this->search . "'";
    }
}
