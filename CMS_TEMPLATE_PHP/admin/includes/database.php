<?php

require_once("new_config.php");

class Database {

    public $connection;

// By this we will be able to call database connection from any page
    function __construct(){

        $this->open_db_connection();
    }

// Connection to the database
    public function open_db_connection(){

//    $this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if($this->connection->connect_errno){

            die("Database connection failed padly" . $this->connection->connect_error);


        }

    }

// Query to the database
    public function query($sql){
//      $result = mysqli_query($this->connection,$sql);
        $result = $this->connection->query($sql);

        $this->confirm_query($result);

// And pull out the result
        return $result;
    }

    private function confirm_query($result){
         if(!$result){
            die("QUERY FAILED" . $this->connection->error);
        }
    }

// this function escapes special characters from stríng for more security
    public function escape_string($string){
//      $escaped_string = mysqli_real_escape_string($this->connection,$string);
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

    public function the_insert_id(){
     // return mysqli_insert_id($this->connection);
        return $this->connection->insert_id;
    }

}

$database = new Database;

?>
