<?php

// function pdo_get_connection() {
//     $servername = "localhost";
//     $username = "root";
//     $password = "";

//     try {
//     $conn = new PDO("mysql:host=$servername;dbname=todolist", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//     }
// }

function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=todolist;charset=utf8";
    $username = 'root';
    $password = '';

    try {
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    
    echo "Connected successfully";
    } catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
    }
    
    
    
}
?>