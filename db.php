<?php
class db{
protected $connection;

function setconnection(){
    try{
        $this->connection=new PDO("mysql:host=localhost; dbname=sampledb","root","");
        // echo "Done";
    }catch(PDOException $e){
        echo "Error";
        //die();

    }
}

}
