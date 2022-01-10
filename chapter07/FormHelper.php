<?php

class FormHelper
{
    protected $values = array();

    public function __constuct($values = array()) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->values = $_POST;
        } else {
            $this->values = $values;
        }
    }


}