<?php

class Database{

    private $host="localhost";
    private $db_name="mypostblog";
    private $username="root";
    private $password="charles1992";

    private $conn;

    function connects(){
        $this->conn=null;

        try {
            //code...
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //throw $th;
            echo 'Connection Error: ' . $e->getMessage(); 
        }

        return $this->conn;
    }

}



 //Bind data
       $stmt->bindParam(':title',$this->title);
       $stmt->bindParam(':body',$this->body);
       $stmt->bindParam(':author',$this->author);
       $stmt->bindParam(':category_id',$this->category_id);

//Execute query
       if ($stmt->execute()) {
           # code...
           return true;
       }
        printf("Error: %s.\n", $stmt->error());
        return false;

?>
