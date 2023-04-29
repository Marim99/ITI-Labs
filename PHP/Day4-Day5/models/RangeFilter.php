<?php

class RangeFilter implements FilterInterface{
    private $column,$min,$max;

    public function __construct($column,$min,$max)
    {
        $this->column=$column;
        $this->min=$min;
        $this->max=$max;
    }

    public function get_sql()
    {
        return "'". $this->column. "'>'". $this->min ."'and '". $this->max;
    }
}