<?php
namespace App\Controller;

use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once 'src/View/list.php';
    }
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $products = $this->productModel->getAll();
            include_once 'src/View/add.php';
        }else {
            $product_name = $_POST['product_name'];
            $productLine = $_POST['productLine'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $dateCreated = $_POST['dateCreated'];
            $productDetail = $_POST['productDetail'];
            $this->productModel->add($product_name,$productLine,$price,$amount,$dateCreated,$productDetail);
            header("location:index.php");

        }
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
        }
        $this->productModel->deleteProducts($id);
       header('location:index.php');
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
            $products = $this->productModel->search($search);
            include "src/View/list.php";
        }

    }
}