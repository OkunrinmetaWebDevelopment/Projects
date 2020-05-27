<?php

Class DbConnection{

          private  $servername;
          private  $username;
          private  $password;
          private  $dbname;
          private  $charset;


          public function connect(){
              $this->servername="127.0.0.1:3306";
              $this->username= "root";
              $this->password= "charles1992";
              $this->dbname= "cryptoID";
              $this->charset="utf8mb4";

              try {
                $dsn="mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
                $pdo= new PDO($dsn,$this->username,$this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;

              } catch (PDOException $e) {
                  echo "Error: " . $e->getMessage();

              }
        }




}



?>
