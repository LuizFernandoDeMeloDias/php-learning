<?php 
namespace App\Models;
class User{
    public function __construct(
        private string $name,
        private int $age,
        private Wallet $wallet
    ){}
    public function getName():string{
        return $this->name;
    }
    public function getAge():int{
        return $this->age;
    }
    public function getWallet(): Wallet{
        return $this->wallet;
    }
}
?>