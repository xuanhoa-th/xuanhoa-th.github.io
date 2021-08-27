<?php
namespace Model;

class AboutDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function create($about){
        $sql = "INSERT INTO about(name, image, content,status,category_id) VALUES (?, ?, ?,?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1,$about->name);
        $stmt->bindParam(2,$about->image);
        $stmt->bindParam(3,$about->content);
        $stmt->bindParam(4,$about->status);
        $stmt->bindParam(5,$about->category_id);
        return $stmt->execute();

    }

}