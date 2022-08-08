<?php


namespace MVC\models;
use PDO;

class model
{
    protected $_connect;

    public function __construct()
    {
        // optional
        $host     = 'localhost';
        $userName = 'root';
        $password = '';
        $port     = 3306;
        $db_name = 'revision';

        // required
        if (!empty($options['db_name'])){
            $db_name = $options['db_name'];
        }
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