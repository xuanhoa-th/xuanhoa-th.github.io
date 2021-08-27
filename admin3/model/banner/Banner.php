<?php


namespace Model;


class Banner
{
    public $id;
    public $name;
    public $content;
    public $image;

    public function __construct($name,$content,$image)
    {
        $this->name = $name;
        $this->image= $image;
        $this->content = $content;
    }

}