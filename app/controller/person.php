<?php 

    interface PersonControlle{

        public function userName($name);

        public function userSurName($surName);

        public function userSex($sex);

        public function userCpf($cpf);

        public function userEmail($email);

        public function userPassword($password);

        public function showName();

        public function showSurName();

        public function showSex();

        public function showCpf();

        public function showEmail();

        public function showPassword();
        
    }

?>