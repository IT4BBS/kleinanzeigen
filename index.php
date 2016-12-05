<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">

<head>
    <title>BBS Kleinanzeigen</title>

    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="generator" content="Webocton - Scriptly (www.scriptly.de)" />

    <link href="style.css" type="text/css" rel="stylesheet" />
    <link href="inputBox.css" type="text/css" rel="stylesheet" />

       <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }   
    </script>
</head>

<body>
   <div id="header_1">
       <h1>BBS Kleinanzeigen</h1>
   </div>
     <div id="menu1">
       <a href="#">Home</a>            &nbsp;&nbsp;
       <a href="UserRegistry.html">Registrieren</a>    &nbsp;&nbsp;
       <a href="#">Hilfe</a>           &nbsp;&nbsp;
   </div>
    <div id="content_bg">
       
   </div>
   <div id="search">
        <form>
            <label for="suche">
                        <input id="suche" name="suche"> 
                        <input type="submit" value="Suchen">
            </label>
      </form>
   </div>
   <div id="category">
       <h3>Kategorien:</h3>
       ----------------<br />
       <a href="/kategorie/hifi">Audio und Hifi</a><br />
       <a href="/kategorie/auto">Auto und Motorrad</a> <br />
       <a href="/kategorie/buecher">B&uuml;cher</a> <br />
       <a href="/kategorie/buero">B&uuml;ro und Schreibwaren</a> <br />
       <a href="/kategorie/elektro">Computer, <br />Handy,Netzwerk</a> 
       <a href="/kategorie/elektronik">Elektronik</a> <br />
       <a href="/kategorie/dvd">Filme und DVD</a> <br />
       <a href="/kategorie/kamera">Kameras</a> <br />
   </div>
    
    <!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"class="close" title="Close Modal">&times;</span>
  <!-- Modal Content -->
  <form class="modal-content animate" action="UserRegistryLogic.php">
    <div class="imgcontainer">
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
      <!--Platz für ein Bild-->
    </div>

    <div class="container">
      <label><b>Benutzername</b></label>
      <input type="text" placeholder="Benutzername eingeben" name="nickName" required>

      <label><b>E-Mail</b></label>
      <input type="text" placeholder="E-Mail Adresse eingeben" name="mail" required>

      <label><b>Passwort</b></label>
      <input type="password" placeholder="Passwort eingeben" name="password" required>

      <label><b>Passwort wiederholen</b></label>
      <input type="password" placeholder="Passwort wiederholen" name="passwordReply" required>


      <button type="submit">Registrieren</button>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">abbrechen</button>
    </div>
  </form>
</div>
    
</body>
</html>
