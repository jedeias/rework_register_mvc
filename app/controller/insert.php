<?php

include ("../autoload.php");

$name = $_POST["name"];
$surName = $_POST["surName"];
$sex = $_POST["sex"];
$password = $_POST["password"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];

if(empty($name) || empty($surName) || empty($sex) || empty($password) || empty($email) || empty($cpf)){
    header("location: ../view/register.html");
}

$person = new People();

$person->userName($name);
$person->userSurName($surName);
$person->userSex($sex);
$person->userPassword($password);
$person->userEmail($email);
$person->userCPF($cpf);

$register = new Crud();

$register->insert($person);

?>