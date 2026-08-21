<?php 

require_once "./vendor/autoload.php";
use App\Models\Product;
use App\Services\PurchaseService;
$product = new Product("Mouse", 100.0);
$purchase = new PurchaseService($product);
$purchase->purchase()

?>