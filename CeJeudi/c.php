<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mabase";

                     //$bdd = new PDO('mysql:host=localhost;dbname = espace membre', 'root', '');
$dbb = new PDO("mysql:host=localhost;dbname=$dbname", "root", "");
                     //$quer = "INSERT INTO user (username, mail, mdp) VALUES ('pseudo2', 'mail2@a.co', '0123')";
     $sql = "INSERT INTO user (username, mail, mdp)
     VALUES ('John6', 'Doe260', 'john@example.com')";

                     //$query = "insert into membre values ('$pseudo', '$mail', '$mdp')";
     $dbb->exec($sql);
     echo "Ajout avec succes";

    $dbb = new PDO("mysql:host=localhost;dbname=mabase", "root", "");
    // set the PDO error mode to exception
    $sql = "INSERT INTO user (username, mail, mdp)
    VALUES ('John88', 'Doe2', 'john@example.com')";
    // use exec() because no results are returned
    $dbb->exec($sql);
    echo "New record created successfully";

$conn = null;
 $dbb = new PDO("mysql:host=localhost;dbname=mabase", "root", "");
    // set the PDO error mode to exception
    $sql = "INSERT INTO user (username, mail, mdp)
    VALUES ('John99', 'Doe2', 'john@example.com')";
    // use exec() because no results are returned
    $dbb->exec($sql);
    echo "New record created successfully";

    $dbb = new PDO("mysql:host=localhost;dbname=mabase", "root", "");
    // set the PDO error mode to exception
    $sql = "INSERT INTO user (username, mail, mdp)
    VALUES ('John33', 'Doe33', 'john@example.com')";
    // use exec() because no results are returned
    $dbb->exec($sql);
    echo "New record created successfully";

?>