<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $motif = $_POST["motif"];
    $message = $_POST["message"];
    //Les différentes informations renseignées dans le formulaire sont stockées dans ces 4 variables.
    /*
    $file = fopen('submissions.txt', 'a');
    fwrite($file, "Name: $name\nEmail: $email\nMotif: $motif\nMessage: $message\n\n");
    fclose($file);
    //On 'append' dans le fichier 'submissions.txt' les différentes informations renseignées plus haut.
    */
    try{
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'restaurant2.0';
            
        //On établit la connexion
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $conn->prepare("INSERT INTO submissions (name, email, motif, message) VALUES(:name, :email, :motif, :message)");
        $sth->bindParam(':name',$name);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':motif',$motif);
        $sth->bindParam(':message',$message);
        $sth->execute();
        header("Location: contact-confirmed.html");
        exit();
    }
    catch(PDOException $e){
    echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
}
?>