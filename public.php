<?php 



if (!isset($_POST['name'], $_POST['age'])){
    echo "os dados não foram carreegados";
    return;
}
if (empty($_POST['name'])){
    echo "Nome não informado";
    return;
}
if (!validAge($_POST['age'])){
    echo "Idade formato incorreto";
    return;
}

$name = $_POST['name'];
$age = $_POST['age'];

echo "olá $name <br> Você tem $age Anos!";


function validAge(string $a): bool{
    if(
        empty($a) or
        !is_numeric($a) or
        $a > 120 or
        $a < 1 or
        floor($a) != $a
        ){
            return false;
        }
        
        return true;
}
?>