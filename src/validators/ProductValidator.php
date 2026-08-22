<?php 
namespace App\Validators;

use App\Interfaces\ProductValidatorInterface;
use App\Models\Product;

class ProductValidator implements ProductValidatorInterface{

    public function isValid(Product $product): bool{
        if($product->getPrice() < 0.01){
            return false;
        }
        return true;
    }

}

?>