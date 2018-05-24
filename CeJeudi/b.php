<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabase";


    $dbb = new PDO("mysql:host=localhost;dbname=mabase", "root", "");
    // set the PDO error mode to exception
    $sql = "INSERT INTO user (username, mail, mdp)
    VALUES ('John6', 'Doe2', 'john@example.com')";
    // use exec() because no results are returned
    $dbb->exec($sql);
    echo "New record created successfully";

$conn = null;
?>