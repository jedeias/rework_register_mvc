<?php

    class Host{
        
        private $server = "dspwiii.mysql.dbaas.com.br";
        private $database = "dspwiii";
        private $username = "dspwiii";
        private $password = "Dspw3@";

	public function getServer() {
		return $this->server;
	}

	public function getDatabase() {
		return $this->database;
	}

	public function getUsername() {
		return $this->username;
	}

	public function getPassword() {
		return $this->password;
	}

}
    

?>