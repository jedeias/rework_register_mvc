<?php

require_once ("../controller/crudController.php");
require_once ("people.php");

class Crud extends Connect implements CrudController{

    public function insert(object $person){

        $this->insertInto($person);

    }

    public function update(object $person){

    }

    public function delete(object $person){

    }

    private function insertInto(object $person){
        $id = rand(1, 45687434);

        echo"$id";

        echo"<br>";
        echo"26↓";

        echo"<pre>";
        print_r($person);

        $name = $person->showName();

        $surName = $person->showSurName();

        $sex = $person->showSex();

        $email = $person->showEmail();

        $cpf = $person->ShowCpf();

        $password = $person->ShowPassword();

        $this->getMysqli()->query("INSERT INTO cliente (cli_id ,cli_nome ,cli_sobrenome, cli_sexo, cli_email, cli_cpf, cli_senha) 
        VALUES ('$id' , '$name' , '$surName', '$sex', '$email', '$cpf', '$password') ");
    }

    private function updateUser(object $person, $id){

        print_r($person);

        $name = $person->showName();

        $surName = $person->showSurName();

        $sex = $person->showSex();

        $email = $person->showEmail();

        $cpf = $person->ShowCpf();

        $password = $person->ShowPassword();

        $this->getMysqli()->query("UPDATE cliente SET ( cli_nome = '$name',
                                                        cli_sobrenome = '$surName', 
                                                        cli_sexo = '$sex', 
                                                        cli_email = '$email', 
                                                        cli_cpf = '$cpf', 
                                                        cli_senha = '$password' ) WHERE cli_id = '$id' ");
    
    }
}

?>