<?php


namespace Model;


class Category
{
    public $id;
    public $name;
    public $status;

    public function __construct($name, $status)
    {
        $this->name = $name;
        $this->status = $status;

    }

}