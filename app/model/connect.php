<?php

// require_once ("../config/host.php");

class Connect extends Host{

    private $mysqli;
    public function __construct(){
        $this-> mysqli = new mysqli(
            $this->getServer(),
            $this->getUsername(),
            $this->getPassword(),
            $this->getDatabase()

        );
    }

    public function query($sql) {

        $result = $this->mysqli->query($sql);
        if (!$result) {
            die('Error executing query: ' . $this->mysqli->error);
        }

        return $result;
    }

    public function __destruct(){
        $this->mysqli->close();
    }

	public function getMysqli() {
		return $this->mysqli;
	}
}

$conect = new Connect();

?>