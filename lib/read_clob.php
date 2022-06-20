<?php
    //fonction de conversion de CLOB en string
    function read_clob($field) {            
        return $field->read($field->size());
    }
?>