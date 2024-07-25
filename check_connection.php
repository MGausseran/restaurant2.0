 
        <?php
        try {
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'restaurant2.0';
            //On établit la connexion
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
        }
        ?>