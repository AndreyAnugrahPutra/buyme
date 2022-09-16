<?php

class Database 
{
    private $host = DB_HOST,
            $user = DB_USER,
            $pass = DB_PASS,
            $db_name = DB_NAME;

    private $db_connect,
            $db_query;
    
    public function __construct()
    {
         // data source name
         $dsn = 
         'mysql:host='.$this->host.';
         dbname='.$this->db_name;

         $option = 
         [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
         ];

         try
         {
             $this->db_connect = new PDO($dsn, $this->user, $this->pass, $option);
         }
         catch(PDOException $e) 
         {
             die($e->getMessage());
         }
    }

    public function query($query)
    {
        $this->db_query = $this->db_connect->prepare($query);
    }

    public function bind($param, $value, $type = null)
    {
        if( is_null($type) )
        {
            switch( true )
            {
                case is_int($value) : 
                    $type = PDO::PARAM_INT;
                    break;

                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                
                default :
                    $type = PDO::PARAM_STR;

            }
        }

        $this->db_query->bindValue($param, $value, $type);
    }

    public function execute()
    {
        $this->db_query->execute();
    }
    
    public function resultSet()
    {
        $this->execute();
        return $this->db_query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single()
    {
        $this->execute();
        return $this->db_query->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        return $this->db_query->rowCount();
    }
}