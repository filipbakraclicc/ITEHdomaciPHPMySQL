<?php

class DB
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $database = "kompanije_izvestaji";
    public $conn;

    function __construct()
    {
        $this->konektujSeNaBazu();
    }

    function konektujSeNaBazu()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
    }
}
