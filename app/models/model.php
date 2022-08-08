<?php


namespace MVC\models;
use PDO;

class model
{
    protected $_connect;

    public function __construct()
    {
        // optional
        $host     = HOST_NAME;
        $userName = USER_NAME;
        $password = PASSWORD;
        $port     = PORT;
        $db_name  = DATABASE_NAME;


        $dsn = "mysql:host={$host};port={$port};dbname={$db_name}";

        // connect
        try {
            $this->_connect = new PDO($dsn, $userName, $password);
            $this->_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $exp)
        {
            echo "Failed To connect : {$exp->getMessage()}";
        }
    }
}