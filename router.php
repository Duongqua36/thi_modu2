<?php
use App\Controller\ProductController;

require_once 'src/Controller/ProductController.php';

$productController = new ProductController();

$page = $_REQUEST['page'] ?? null;
switch ($page) {
    case 'products':
        $productController->index();
        break;
    case 'add_products':
        $productController->add();
        break;
    case 'delete':
        $productController->delete();
        break;
    case 'search':
        $productController->search();
        break;
    case 'edit':
        $productController->edit();
        break;

}