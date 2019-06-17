<HTML>
<HEAD><TITLE>Von-Bis</TITLE></HEAD>
<BODY> 
<?php

<HTML>
<HEAD><TITLE>Von-Bis</TITLE></HEAD>
<BODY> 
<?php 

$my_db = mysqli_connect(localhost, webTest, !12345sechs, user) or die("Verbindung fehlgeschlagen");

$anfrage = mysqli_real_escape_string($my_db, "SELECT * FROM 'user'");

$ergebnis = mysqli_query($my_db, $anfrage) or die(mysqli_error($my_db));

$anzahl = mysqli_num_rows($ergebnis);

while ($ob = mysqli_fetch_object($ergebnis)) {
    echo $ob->username;
    echo <br>;
}

?>