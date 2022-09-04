<?php
 $host= "localhost";
 $username = "root";
 $password = "";
 $dbname = "php";

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }

?>