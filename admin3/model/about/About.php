<?php
namespace Model;

class About
{
    protected $id;
    protected $name;
    protected $image;
    protected $content;
    protected $status;
    protected $category_id;

    public function __construct($name, $image, $content,$status,$category_id)
    {
        $this->name = $name;
        $this->image = $image;
        $this->content = $content;
        $this->status = $status;
        $this->category_id = $category_id;
    }
}