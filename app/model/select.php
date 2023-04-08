<?php

    class Select extends Connect implements SelectController{
        private function querytForLogin($email, $password){

            $sql = "SELECT * FROM `cliente` WHERE `cli_email` = '$email' AND `cli_senha` = '$password'";

            $result = $this->query($sql);

            $result = $result->fetch_all(MYSQLI_ASSOC);

            return($result[0]);
            
        }
        
        private function queryAllUsers(){

            $sql = "SELECT * FROM `cliente`";

            $result = $this->query($sql);

            $result = $result->fetch_all(MYSQLI_ASSOC);

            return($result);

        }

        public function selectAllUsers(){
            return $this->queryAllUsers();
        }

        public function loginCheck($email,$password){

            $this->email = $email;
            $this->password = $password;
    
            var_dump($this->email, $this->password);
        
            $databaseArray = $this->querytForLogin($this->email, $this->password);

            $databaseEmail = $databaseArray['cli_email'];
            $databasepassword = $databaseArray['cli_senha'];
    
            if($this->email != $databaseEmail && $this->password != $databasepassword){
                
                echo"Os dados não são validos";
                header("Refresh: 4; url=../");
                die();

            }else {
                header("location: ../app/view/listUser.php");
                echo"Os dados conferem";
            }
    
        }
    }
    

?>