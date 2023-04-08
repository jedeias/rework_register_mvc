<?php

    interface CrudController{

        public function insert(object $preson);

        public function update(object $preson, $id);

        public function delete(object $preson);

    }

?>