<?php


// meest onbeveiligde methode!!!
$sql = "SELECT *FROM `users` WHERE Gebruikersnaam = '$postEmail'AND Paswoord = '$postPassword'
";

// gegevens direct opslaan
$result = mysqli_query($conn, $sql);


?>
