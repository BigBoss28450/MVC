<?php
    abstract class Controller {
        
        private $view;

        public function __construct() {

        }

        abstract public function index();
    }
    
?>