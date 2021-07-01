<?php
    require_once('../db-connect.php');
    $sql= 'SELECT * FROM `projects`';
    $query= $db->prepare($sql); $query->execute(); $result= $query->fetchAll(PDO::FETCH_ASSOC); 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sonia ROLLAND - Portfolio</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../assets/styles/bootstrap-custom.css" />
        <link rel="stylesheet" href="../assets/styles/scrollbar.css" />
        <link rel="stylesheet" href="../assets/styles/navbar.css" />
        <link rel="stylesheet" href="../assets/styles/main.css" />

    </head>
    <body>
        <header>
            <nav class="container-navbar barnav-border navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-ul">
                            <li class="nav-item me-5 mt-2 navbar-li">
                                <a class="nav-link navbar-a" href="#header__title">Accueil</a>
                            </li>
                            <li class="nav-item me-5 mt-2 navbar-li">
                                <a class="nav-link navbar-a" href="#section__about">À propos</a>
                            </li>
                            <li class="nav-item me-5 mt-2 navbar-li">
                                <a class="nav-link navbar-a" href="#">Projets</a>
                            </li>
                            <li class="nav-item me-5 mt-2 navbar-li">
                                <a class="nav-link navbar-a" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="header__title">
                <h1 class="header__title--sonia">Sonia ROLLAND</h1>
                <h2 class="header__title--webdesigner">Web Designer</h2>
            </div>
        </header>
        <section class="container" id="section__about">
            <div id="section__about--circles">
                    <div id="section__about--first-circle"></div>
                    <div id="section__about--second-circle"></div>
                </div>
                <h2 class="section__about--a-propos mb-5">À propos</h2>

            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <figure class="section__about--profile-picture">
                        <img src="../assets/images/front/sonia.gif" alt="">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="section__about--blockquote">
                    Je m'appelle Sonia, j'apprends le métier de Web Designer en me formant à la conception et au développement de sites et d'application Web à l'Access Code School de Dijon. Je me passionne pour le graphic design , le web, le dessin, la création, l'écriture, l'art, la photographie.
                    </p>
                </div>
            </div>

            

        </section>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
