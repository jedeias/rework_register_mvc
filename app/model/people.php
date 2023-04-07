<?php 

    class People implements PersonControlle{

        private $name;
        private $surname;
        private $sex;
        private $cpf;
        private $email;
        private $password;

        public function userName($neme){

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
