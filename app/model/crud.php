<?php

if(include_once ("../controller/crudController.php") == true){
    include_once ("../controller/crudController.php");
}else{
    include_once ("../../controller/crudController.php");
}
include_once ("people.php");

class Crud extends Connect implements CrudController{

    public function insert(object $person){

        $this->insertInto($person);

    }

    public function update($person, $id){
        $this->updateUser($person, $id);
    }

    public function delete(object $person){

    }

    private function insertInto(object $person){
        $id = rand(1, 4568743445);

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

        $name = $person->showName();

        $surName = $person->showSurName();

        $sex = $person->showSex();

        $email = $person->showEmail();

        $cpf = $person->ShowCpf();

        $password = $person->ShowPassword();

        $this->getMysqli()->query("UPDATE cliente SET   cli_nome = '$name',
                                                        cli_sobrenome = '$surName', 
                                                        cli_sexo = '$sex', 
                                                        cli_email = '$email', 
                                                        cli_cpf = '$cpf', 
                                                        cli_senha = '$password' WHERE cli_id = '$id' ");
    
    }
}

?>