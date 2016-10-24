<?php session_start();
    
    if(isset($_POST['nickName']))
    {
        $postNickName = $_POST['nickName'];

        //prüfen ob session besteht
        if(isset($_session['mail']))
        {

            //in Datenbank speichern
            $servername = "localhost";
            $username = "username";
            $password = "password";

            //db Verbindung herstellen
            $conn = new mysqli($servername, $username, $password);

            //Verbindung prüfen
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }

            $stmt = $dbh->prepare('UPDATE user SET nickname = ? WHERE mail = ?');
            $stmt->bind_param("ss", $guid, $postNickName, $_session['mail']);
            
            $stmt->execute();
        }
    }

?>