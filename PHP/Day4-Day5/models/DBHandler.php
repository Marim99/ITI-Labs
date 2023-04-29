<?php
interface DBHandler
{
    public function connect();
    public function get_all_items_paginated($fields = array(), $start = 0);
    public function get_item_by_id($id);
}
