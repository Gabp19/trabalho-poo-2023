<?php

include_once__DIR__ . '/../../config/config.php';

class Database
{ 
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $conn;



    // 
    public function construct ()
    {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->password = DB_PASS;
        $this->dbname = DB_NAME;

    }

    //Método pra conexão com o banco de dados 
    public function connect ()
    {
        $this->conn = new msql(
            $this->host,
            $this->user, 
            $this->password,
            $this->dbname, 
       
        );
        
        if ($this->conn-.connect_error)
        {
            die("Falha na conexão" . $this->conn->connect_error);
        }

        return $this->conn;
    }

    // Método pra fechar a conexão com o banco de dados 
    public function close ()
    {
       if ($this->conn)
       {
           $this->conn->close();
       }
    }

    



}


?>