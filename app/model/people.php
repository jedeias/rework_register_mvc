<?php 

    class People implements PersonControlle{

        private $name;
        private $surname;
        private $sex;
        private $cpf;
        private $email;
        private $password;


        private function getUserName(){
            return $this ->name;
        }
        public function setUserName($name){
            $this ->name = $name;
        }
        private function getUserSurname(){
            return $this ->surname;
        }
        public function setUserSurname($surname){
            $this ->surname = $surname;
        }
        private function getUserSex(){
            return $this ->sex;
        }
        public function setUserSex($sex){
            $this ->sex = $sex;
        }
        private function getUserCpf(){
            return $this ->cpf;
        }
        public function setUserCpf($cpf){
             $this ->cpf = $cpf;
        }
        private function getUserEmail(){
            return $this ->email;
        }
        public function setUserEmail($email){
            $this ->email = $email;
        }
        private function getUserPassword(){
            return $this ->password;
        }
        public function setUserPassword($password){
            $this ->password = $password;
        }
        public function userName($name){

            $this->setUserName($name);


        }

        public function userSurName($surName){

            $this->setUserSurName($surName);

        }

        public function userSex($sex){

            $this->setUserSex($sex);

        }

        public function userCpf($cpf){

            $this->setUserCpf($cpf);
        
        }

        public function userEmail($email){

            $this->setUserEmail($email);

        }

        public function userPassword($password){

            $this->setUserPassword($password);

        }


        #kaua wanna make set and get, now i have to wait for the get and set
    
    }

?>
