<?php 
namespace App\Interfaces;

use App\Models\Product;

interface ProductValidatorInterface{
    public function isValid(Product $product): bool;
}
?>