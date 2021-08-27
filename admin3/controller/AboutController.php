<?php


namespace Controller;
use Model\AboutDB;
use Model\About;
use Model\DBConnection;


class AboutController
{
    public  $aboutDB;

    public function __construct()
    {
        $conn = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->aboutDB = new AboutDB($conn->connect());
    }

    public function addAbout(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET'){
            include 'view/about/addAbout.php';
        } else {
            $name = $_REQUEST['name'];
            $content = $_REQUEST['content'];
            $status = $_REQUEST['status'];
            $category_id = $_REQUEST['category_id'];

            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/' . $fileName);

            $about = new About($name,$fileName,$content,$status,$category_id);
            $this->aboutDB->create($about);
            $message = 'Tạo mới thành công';
            include 'view/about/addAbout.php';
        }
    }

}