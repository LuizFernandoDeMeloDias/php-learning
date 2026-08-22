<?php 
namespace App\Models;
class Product{
    public function __construct(
        private string $name,
        private float $price,
        private bool $requiresAdult
    ){}

    public function getName(): string {
        return $this->name;
    }
    public function getPrice():float {
        return $this->price;
    }
    public function getRequiresAdult(): bool{
        return $this->requiresAdult;
    }
}
?>