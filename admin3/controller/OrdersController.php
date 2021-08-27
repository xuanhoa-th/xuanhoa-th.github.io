<?php


namespace Controller;
use Model\OrdersDB;
use Model\Orders;
use Model\DBConnection;

class OrdersController
{
    public $OrdersDB;
    public function __construct()
    {
        $conn = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->OrdersDB = new OrdersDB($conn->connect());
    }

    public function addOrders()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/orders/addOrders.php';
        } else {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $number = $_POST['number'];
            $note = $_POST['note'];
            $created_at = $_POST['created_at'];

            $orders = new Orders($name, $email,$phone, $address,$number,$note,$created_at);
            $this->OrdersDB->createOrders($orders);
            $message = 'Tao moi thanh cong';
            include 'view/orders/addOrders.php';
        }
    }

    public function listOrders(){
        $orders = $this->OrdersDB->getAllOrders();
        include 'view/orders/listOrders.php';
    }

    public function deleteOrders()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $orders = $this->OrdersDB->getOrders($id);
            include 'view/orders/deleteOrders.php';
        } else {
            $id = $_POST['id'];
            $this->OrdersDB->deleteOrders($id);
            echo "<script>window.location='./index.php?page=listOrders'</script>";
        }
    }

    public function editOrders()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $order = $this->OrdersDB->getOrders($id);
            include 'view/orders/editOrders.php';
        } else {
            $id = $_POST['id'];
            $order = new Orders($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['number'], $_POST['note'], $_POST['created_at']);
            $this->OrdersDB->update($id, $order);
            echo "<script>window.location='./index.php?page=listOrders'</script>";
        }
    }

}