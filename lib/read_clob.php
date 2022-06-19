<?php
    function read_clob($field) {            //fonction de conversion de CLOB en string
        return $field->read($field->size());
    }
?>