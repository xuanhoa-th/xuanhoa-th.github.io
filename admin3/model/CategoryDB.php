<?php


namespace Model;


class CategoryDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($category){
        $sql = "INSERT INTO category(name,status) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $category->name);
        $statement->bindParam(2, $category->status);
        return $statement->execute();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $categorys = [];
        foreach ($result as $row) {
            $category = new Category($row['name'], $row['status']);
            $category->id = $row['id'];
            $categorys[] = $category;
        }
        return $categorys;
    }
    public function get($id){
        $sql = "SELECT * FROM category WHERE id = ?";
        $stmt2 = $this->connection->prepare($sql);
        $stmt2->bindParam(1, $id);
        $stmt2->execute();
        $row = $stmt2->fetch();
        $category = new Category($row['name'], $row['status']);
        $category->id = $row['id'];
        return $category;
    }
    public function delete($id){
        $sql = "DELETE FROM category WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
    public function update($id, $category){
        $sql = "UPDATE category SET name = ?, status = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $category->name);
        $statement->bindParam(2, $category->status);
        $statement->bindParam(3, $id);
        return $statement->execute();
    }



}