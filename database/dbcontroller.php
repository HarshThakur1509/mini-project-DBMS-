<?php

class dbcontroller
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "steam";


    public $con = null;

    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection()
    {
        if(!is_null($this->con)){
            $this->con->close();
            $this->con = null;
        }
    }
}

