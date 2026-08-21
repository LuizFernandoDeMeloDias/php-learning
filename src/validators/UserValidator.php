<?php 
namespace App\Validators;
use App\Models\User;

class UserValidator{
    public function isValid(User $user): bool{
        $userAge = $user->getAge();
        $userName = $user->getName();

        if(empty($userName)){
            return false;
        }
        if(
            !is_numeric($userAge) or
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