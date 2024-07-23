<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $motif = $_POST["motif"];
    $message = $_POST["message"];
     // Ouvrir le fichier en mode append
     $file = fopen('submissions.txt', 'a');
    
     // Écrire les données dans le fichier
     fwrite($file, "Name: $name\nEmail: $email\nMotif: $motif\nMessage: $message\n\n");
     
     // Fermer le fichier
     fclose($file);
    //Les différentes informations renseignées dans le formulaire sont stockées dans ces 4 variables.
}
?>