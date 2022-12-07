<?php

class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "the_company_night"; // the_company
    protected $conn; // same as public / can use by everyone or in anywhere

    public function __construct()
    {
        $this->conn = new mysqli($this->server_name,$this->username,$this->password,$this->db_name);

        if($this->conn->connect_error)
        {
            die("Unable to Connect to database: ".$this->conn->connect_error);
        }
        
    }

}