<?php

    include 'Configuration.php';

    //prüfe post Daten
    if(isset($_POST['nickName']) && isset($_POST['password']) && isset($_POST['passwordReply']) && isset($_POST['mail']))
    {
        $postNickname = $_POST['nickName'];
        $postPassword = $_POST['password'];
        $postPasswordReply = $_POST['passwordReply'];
        $postMail = $_POST['mail'];
    }
    else
    {
        echo 'All fields required';

    }
    
    //db Verbindung herstellen
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verbindung prüfen
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $guid = com_create_guid();

    $stmt = $dbh->prepare("INSERT INTO user guid,nickname,password,email,isAdmin VALUES (?, ?, ?,0)");
    $stmt->bind_param("sss", $guid, $postNickname, $postPassword);
    $stmt->execute();
    //return to start

    exit;
?> 
