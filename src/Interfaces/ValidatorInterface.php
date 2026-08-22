<?php 
namespace App\Interfaces;
use App\Models\User;
interface ValidatorInterface{
    public function isValid(User $user): bool;
}

?>