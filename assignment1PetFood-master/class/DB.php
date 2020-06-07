<?php


class DB
{
    private $server = "kil9uzd3tgem3naa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "eihuxghz1d16wln9";
    private $pwd = "rm6ssod1ra1y6iho";
    private $database = "xuc77vapd06kjxop";

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd,$this->database); //create database connection
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }



}