<?php
include ("../../autoload.php");
include("../../model/people.php");
include("../../model/crud.php");
//include("../../controller/person.php");

$id = $_POST["id"];
$name = $_POST["name"];
$surName = $_POST["surName"];
$sex = $_POST["sex"];
$password = $_POST["password"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];



if(empty($name) || empty($surName) || empty($sex) || empty($password) || empty($email) || empty($cpf)){
    header("location: ../view/register.html");
}

$user = new People();

$user->userName($name);
$user->userSurName($surName);
$user->userSex($sex);
$user->userPassword($password);
$user->userEmail($email);
$user->userCPF($cpf);

$register = new Crud();


$register->update($user, $id);

?>