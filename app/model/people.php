<?php 
if(require_once ("../../controller/person.php")){
    require_once ("../../controller/person.php");
}else{
    require_once ("../controller/person.php");
}

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
        private function setUserName($name){
            $this ->name = $name;
        }
        private function getUserSurname(){
            return $this ->surname;
        }
        private function setUserSurname($surname){
            $this ->surname = $surname;
        }
        private function getUserSex(){
            return $this ->sex;
        }
        private function setUserSex($sex){
            $this ->sex = $sex;
        }
        private function getUserCpf(){
            return $this ->cpf;
        }
        private function setUserCpf($cpf){
             $this ->cpf = $cpf;
        }
        private function getUserEmail(){
            return $this ->email;
        }
        private function setUserEmail($email){
            $this ->email = $email;
        }
        private function getUserPassword(){
            return $this ->password;
        }
        private function setUserPassword($password){
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

        public function showName(){
            return $this->getUserName();
        }

        public function showSurName(){
            return $this->getUserSurName();
        }

        public function showSex(){
            return $this->getUserSex();
        }

        public function showCpf(){
            return $this->getUserCpf();
        }

        public function showEmail(){
            return $this->getUserEmail();
        }

        public function showPassword(){
            return $this->getUserPassword();
        }
    
    }

?>
