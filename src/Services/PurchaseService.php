<?php 
namespace App\Services;

use App\Models\Product;
use App\Models\Purchase;
use App\Validators\ProductValidator;
use App\Validators\PurchaseValidator;
use App\Validators\UserValidator;

class PurchaseService{
    public function __construct(
        private UserValidator $userValidator,
        private ProductValidator $productValidator,
        private PurchaseValidator $purchaseValidator
    ){}
    public function purchase(Purchase $purchase): string{
        $product = $purchase->getProduct();
        $user = $purchase->getUser();

        if(
            !$this->userValidator->isValid($user) or
            !$this->productValidator->isValid($product) or
            !$this->purchaseValidator->isValid($user, $product)){
            return "compra não validada";
        }
        
        $userWallet = $user->getWallet();
        $userWallet->withdraw($product->getPrice());

        return $user->getName()." comprou o produto ".$product->getName()."
        Por: ".$product->getPrice()." Sobrou na sua Carteira ".$userWallet->getBalance();
    }
}

?>