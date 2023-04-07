<?php

include_once ("autoload.php");

$email = $_POST["email"];
$password = $_POST["password"];

if (empty($email) || empty($password)) {

    echo ("Invalid email or password");
}else{
    
    $validation = new Select();

    $validation->loginCheck($email, $password);

}


?>