<?php 
namespace App\Services;
use App\Models\Product;

class PurchaseService{
    public function __construct(
        private Product $product
    ){}
    public function purchase(): void{
        echo $this->product->getName(), " Foi Comprado por ", $this->product->getPrice();
    }
}

?>