<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bbs_kleinanzeigen";

    //db Verbindung herstellen
    $conn = new mysqli($servername, $username, $password);

    //Verbindung prüfen
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

?>