<?php 
namespace App\Models;
class Wallet{
    public function __construct(
        private float $balance
    ){}
    public function getBalance(): float{
        return $this->balance;
    }
    public function withdraw(float $value): void{
        $this->balance -= $value;
    }
}
?>