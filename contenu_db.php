<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Le terroir, façon street-food.">
    <title>Le Nougaro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d77ec9266d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="fond">
        <header class="container pb-lg-5">
            <div class="row col-12 pt-3 align-content-center justify-content-center">
                <a class="d-flex align-content-center justify-content-center" href="index.html"><img class="col-8 d-flex " src="images/logo-no-background(webp).webp" alt="logo du site"></a>
            </div>
        </header>
    </div>
    <nav class="navbar-dark navbar-expand-lg pb-3 pt-1">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item text-white">
                        <a class="nav-link active mx-5" aria-current="page" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white mx-5" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white mx-5" href="galerie.html">Galerie</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white mx-5" href="about.html">A propos</a>
                    </li>
                    <li class="nav-item text-white">
                        <a class="nav-link text-white mx-5 lien-actif" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="mb-md-5">
        <section class="rubrique">
            <div class="row col-12">
                <div class="d-flex justify-content-center p-3">Contact</div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row col-12">
                    <div class="intro d-flex justify-content-center mt-3 mb-2">
                        <h2>Nous contacter</h2>
                    </div>
                </div>
                <div class="row col-12">
                    <?php
                    try {
                        include("check_connection.php");

                        // Vérifiez si $conn est un objet PDO valide
                        if (!$conn) {
                            throw new Exception("La connexion à la base de données a échoué.");
                        }

                        $query = "SELECT * FROM submissions";
                        $statement = $conn->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                            foreach ($result as $row) {
                                echo "<table><tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["motif"] . "</td><td>" . $row["message"] . "</td></tr>";
                            }
                            echo "</table>";
                        }
                    catch (PDOException $e) {
                        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
                    }
                        ?>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <footer class="container-fluid d-none d-md-block fixed-bottom">
            <div class="row cols-12 align-items-center">
                <div class="col-6">
                    <a href="#" class="p-4 btn btn-primary d-flex justify-content-center">Mentions légales</a>
                </div>
                <div class="col-6">
                    <a href="#" class="p-4 btn btn-primary d-flex justify-content-center">Politique de confidentialité</a>
                </div>
            </div>
        </footer>
        <footer class="container-fluid d-md-none fixed-bottom">
            <div class="row cols-12 align-items-center">
                <div class="col-6">
                    <a href="#" class="p-4 btn btn-primary d-flex justify-content-center">Mentions légales</a>
                </div>
                <div class="col-6">
                    <a href="#" class="p-4 btn btn-primary d-flex justify-content-center">Politique de confidentialité</a>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
