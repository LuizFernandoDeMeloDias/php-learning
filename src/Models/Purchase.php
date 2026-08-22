<?php 
namespace App\Models;
class Purchase{
    public function __construct(
        private User $user,
        private Product $product
    ){}

    public function getUser(): User{
        return $this->user;
    }
    public function getProduct(): Product{
        return $this->product;
    }
}
?>