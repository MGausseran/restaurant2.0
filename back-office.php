<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $motif = $_POST["motif"];
    $message = $_POST["message"];
    //Les différentes informations renseignées dans le formulaire sont stockées dans ces 4 variables.
    $file = fopen('submissions.txt', 'a');
    fwrite($file, "Name: $name\nEmail: $email\nMotif: $motif\nMessage: $message\n\n");
    fclose($file);
    //On 'append' dans le fichier 'submissions.txt' les différentes informations renseignées plus haut.
    header("Location: contact-confirmed.html");
    exit();
}
?>