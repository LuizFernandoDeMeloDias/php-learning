<?php 
namespace App\Validators;

use App\Interfaces\ValidatorInterface;
use App\Models\User;

class UserValidator implements ValidatorInterface{
    public function isValid(User $user): bool{
        $userAge = $user->getAge();
        $userName = $user->getName();

        if(empty($userName)){
            return false;
        }
        if(
            $userAge >= 120 or
            floor($userAge) != $userAge or
            $userAge < 18
            ){
            return false;
        }

        return true;
        
    }
}

?>