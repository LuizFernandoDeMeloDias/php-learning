<?php
require_once "./vendor/autoload.php";

use App\Models\Product;
use App\Models\Purchase;
use App\Models\User;
use App\Models\Wallet;
use App\Services\PurchaseService;
use App\Validators\ProductValidator;
use App\Validators\PurchaseValidator;
use App\Validators\UserValidator;

function createPurchase(
    string $username,
    int $userAge,
    float $userBalance,
    string $productName,
    float $productPrice,
    bool $isProductAdult
    
    ): Purchase{
        $userWallet = new Wallet($userBalance);
        $user = new User($username, $userAge, $userWallet);
        $product = new Product($productName, $productPrice, $isProductAdult);
        $purchase = new Purchase($user, $product);
        return $purchase;
}
$purchase = createPurchase("Luiz", 20, 200.0, "Mouse", 100.0, false);
$purchaseService = new PurchaseService(
    new UserValidator(),
    new ProductValidator(),
    new PurchaseValidator()
);
echo $purchaseService->purchase($purchase);
?>