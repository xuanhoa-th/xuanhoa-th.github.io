<?php


namespace Model;


class BannerDB
{
    protected  $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($banner){
        $sql = "INSERT INTO banner(name,content,image) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $banner->name);
        $statement->bindParam(2, $banner->content);
        $statement->bindParam(3, $banner->image);
        return $statement->execute();
    }
    public function getAllBanner()
    {
        $sql = "SELECT * FROM banner";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $banners = [];
        foreach ($result as $row) {
            $banner = new Banner($row['name'], $row['content'], $row['image']);
            $banner->id = $row['id'];
            $banners[] = $banner;
        }

        return $banners;
    }

    public function getBanner($id){
        $sql = "SELECT * FROM banner WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $banner = new Banner($row['name'], $row['content'], $row['image']);
        $banner->id = $row['id'];

        return $banner;
    }

    public function deleteBanner($id){
        $sql = "DELETE FROM banner WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function updateBanner($id, $banner){
        $sql = "UPDATE banner SET name = ?, content = ?, image = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $banner->name);
        $statement->bindParam(2, $banner->content);
        $statement->bindParam(3, $banner->image);
        $statement->bindParam(4, $id);
        return $statement->execute();
    }


}