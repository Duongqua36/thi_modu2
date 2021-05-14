<?php

namespace App\Model;
use PDO;

class ProductModel
{

    protected \PDO $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function add($product_name, $productLine, $price, $amount,$dateCreated,$productDetail)
    {
        $sql = "INSERT INTO `products`( `product_name`, `productLine`, `price`, `Amount`,`DateCreated`,`productDetail`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product_name);
       // var_dump($product_name);die();
        $stmt->bindParam(2, $productLine);
        //var_dump($productLine);die();
        $stmt->bindParam(3, $price);
        $stmt->bindParam(4, $amount);
        $stmt->bindParam(5, $dateCreated);
        $stmt->bindParam(6, $productDetail);
        $stmt->execute();

    }
    public function deleteProducts($product_id)
    {
        $sql = "DELETE FROM products WHERE product_id=:product_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
    }

    public function search($search){
        $sql ="SELECT * FROM products WHERE product_name LIKE :product_name";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":product_name" ,'%'. $search .'%' );
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
