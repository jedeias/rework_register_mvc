<?php

    class SessionController extends Session {

        public function setSession($ValidAdmin,$admin)
        {
            $this->set($ValidAdmin,$admin);  
                
        }
        
        public function getSession($ValidAdmin)
        {
            return $this->get($ValidAdmin);
        }
        
    }


?>