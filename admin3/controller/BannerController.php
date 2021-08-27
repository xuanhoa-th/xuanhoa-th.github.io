<?php


namespace Controller;
use Model\BannerDB;
use Model\Banner;
use Model\DBConnection;


class BannerController
{
    public $bannerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname=tasaki", "root", "");
        $this->bannerDB = new BannerDB($connection->connect());
    }
    public function addBanner()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/banner/addBanner.php';
        } else {

            $name = $_POST['name'];
            $content = $_POST['content'];
            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/Banner/'.$fileName);

            $banner = new Banner($name, $content,$fileName);
            $this->bannerDB->create($banner);
            $message = 'Tạo mới thành công';
            include 'view/banner/addBanner.php';
        }
    }

    public function listBanner(){
        $banners = $this->bannerDB->getAllBanner();
        include 'view/banner/listBanner.php';
    }

    public function deleteBanner()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $banners = $this->bannerDB->getBanner($id);
            include 'view/banner/deleteBanner.php';
        } else {
            $id = $_POST['id'];
            $this->bannerDB->deleteBanner($id);
//            header('Location: ./listBanner.php');
        }
    }

    public function editBanner()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $banner = $this->bannerDB->getBanner($id);

            include 'view/banner/editBanner.php';
        } else {
            $id = $_POST['id'];
            $file = $_FILES['image'];
            $fileName = $file['name'];
            move_uploaded_file($file['tmp_name'], 'uploads/Banner/'.$fileName);

            $banner = new Banner($_POST['name'], $_POST['content'],$fileName);
//            var_dump($banner);
//            die();
            $this->bannerDB->updateBanner($id, $banner);
//            header('Location: view/banner/listBanner.php');
        }
    }

}