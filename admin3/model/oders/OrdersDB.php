<?php
namespace Model;

class OrdersDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function createOrders($orders){
        $sql = "INSERT INTO orders (name, email, phone,address,number,note,created_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $orders->name);
        $stmt->bindParam(2, $orders->email);
        $stmt->bindParam(3, $orders->phone);
        $stmt->bindParam(4, $orders->address);
        $stmt->bindParam(5, $orders->number);
        $stmt->bindParam(6, $orders->note);
        $stmt->bindParam(7, $orders->created_at);
        return $stmt->execute();
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM orders";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $orders = [];
        foreach ($result as $row) {
            $order = new Orders($row['name'], $row['email'], $row['phone'], $row['address'], $row['number'], $row['note'], $row['created_at']);
            $order->id = $row['id'];
            $orders[] = $order;
        }
        return $orders;
    }

    public function getOrders($id){
        $sql = "SELECT * FROM orders WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $row = $stmt->fetch();
        $orders = new Orders($row['name'], $row['email'], $row['phone'], $row['address'], $row['number'], $row['note'], $row['created_at']);
        $orders->id = $row['id'];
        return $orders;
    }

    public function deleteOrders($id){
        $sql = "DELETE FROM orders WHERE id = ?";
        $stmt2 = $this->connection->prepare($sql);
        $stmt2->bindParam(1, $id);
        return $stmt2->execute();
    }

    public function update($id, $order){
        $sql = "UPDATE orsers SET name = ?, email = ?, phone = ?,address = ?,number = ?,note = ?,created_at = ? WHERE id = ?";
        $stmt3 = $this->connection->prepare($sql);
        $stmt3->bindParam(1, $order->name);
        $stmt3->bindParam(2, $order->email);
        $stmt3->bindParam(3, $order->phone);
        $stmt3->bindParam(4, $order->address);
        $stmt3->bindParam(5, $order->number);
        $stmt3->bindParam(6, $order->note);
        $stmt3->bindParam(7, $order->created_at);
        $stmt3->bindParam(4, $id);
        return $stmt3->execute();
    }

}