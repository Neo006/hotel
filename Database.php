<?php

class Database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $db_name = 'hotel';
    public $connect = "";
    
    public function __construct() {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);

        if (!$this->connect) {
            die("Connection Failed: ".mysqli_connect_error());
        }
    }
}