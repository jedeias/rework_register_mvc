<?php

    class Session{

        public function __construct()
        {

            session_start();
        }        

        public function set($arrayValue, $atributo)
        {
            $_SESSION[$arrayValue] = $atributo;
        }

        public function get($arrayValue)
        {
            return $_SESSION[$arrayValue];
        }
        
       
        function destroy() {
            session_destroy();
        }

    }

?>
