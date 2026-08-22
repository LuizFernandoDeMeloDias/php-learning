<?php 
namespace App\Validators;

use App\Models\Product;
use App\Models\User;

class PurchaseValidator{
    public function isValid(User $user, Product $product): bool{
        if($product->getPrice() > $user->getWallet()->getBalance()){
            return false;
        }
        if($product->getRequiresAdult() and $user->getAge() <= 17){
            return false;
        }

        return true;

    }
}
?>