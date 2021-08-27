<?php


namespace Model;


class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product){
        $sql = "INSERT INTO product(name,image,price,status,category_id) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);

        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->image);
        $statement->bindParam(3, $product->price);
        $statement->bindParam(4, $product->status);
        $statement->bindParam(5, $product->category_id);
        return $statement->execute();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM product";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['image'], $row['price'],$row['status'],$row['category_id']);
            $product->id = $row['product_id'];
            $products[] = $product;
        }
        return $products;
    }

    public function getIdProduct($id){
        $sql = "SELECT * FROM product WHERE product_id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row = $stmt->fetch();

        $product = new Product($row['name'],$row['image'], $row['price'], $row['status']);
        $product->id = $row['product_id'];
        return $product;
    }
    public function deleteProduct($id){
        $sql = "DELETE FROM product WHERE product_id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }



}