<?php
namespace Model;

class Orders
{
    public $id ;
    public $name ;
    public $email ;
    public $phone ;
    public $address ;
    public $number ;
    public $note ;
    public $created_at ;

    public function __construct($name, $email, $phone,$address,$number,$note,$created_at)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->number = $number;
        $this->note = $note;
        $this->created_at= $created_at;
    }

}