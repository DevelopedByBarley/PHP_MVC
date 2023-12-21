<?php

    class Admin_Model{

        private $pdo;

        public function __construct()
        {
            $database = new Database();
            $this->pdo = $database->getConnect(); 
        }

    }
