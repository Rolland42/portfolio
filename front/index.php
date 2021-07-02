<?php
    session_start();
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
        <link rel="icon" type="image/png" href="../assets/images/front/logo.png">
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
                                <a class="nav-link navbar-a" href="#section__projects">Projets</a>
                            </li>
                            <li class="nav-item me-5 mt-2 navbar-li">
                                <a class="nav-link navbar-a" href="#section__contact">Contact</a>
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
            <div class="main__circles">
                <div class="main__first-circle"></div>
                <div class="main__second-circle"></div>
            </div>
            <h2 class="section__about--a-propos mb-5">À propos</h2>

            <div class="row mt-5">
                <div class="col-md-6 col-sm-12">
                    <figure class="section__about--profile-picture">
                        <img src="../assets/images/front/sonia.gif" alt="">
                    </figure>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p class="section__about--blockquote mt-5">
                    Je m'appelle Sonia, j'apprends le métier de <span class="fst-italic">Web Designer</span> en me formant à la conception et au développement de sites et d'application à l'Access Code School de Dijon. Je me passionne pour le <span class="fst-italic">graphic design</span>, la création, l'écriture, le dessin, l'art & la photographie.
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="section__projects">

            <div class="main__circles">
                <div class="main__first-circle"></div>
                <div class="main__second-circle"></div>
            </div>
            <h2 class="section__projects--projets mb-5">Projets</h2>

            <div class="row mt-5">

            <?php foreach ($result as $project) { ?>

                <div class="col-sm-12 col-md-6 mb-5">
                    <a href="single-project.php?id=<?=$project['project_id'] ?>">
                        <div class="flip">
                            <div class="front" style="background-image: url(../assets/images/projects/<?=$project['project_picture']?>)">
                            </div>
                            <div class="back">
                            <h2><?=$project['project_title']?></h2>
                            <hr>
                            <p><?=$project['project_context']?>.</p>
                            </div>
                        </div>
                    </a>
                </div>

            <?php } ?>

            </div>
        </section>

        <section class="container" id="section__contact">

            <div class="main__circles">
                <div class="main__first-circle"></div>
                <div class="main__second-circle"></div>
            </div>
            <h2 class="section__contact--form mb-5">Contact</h2>

            <div id="section__contact--row" class="row mt-5 mb-5">
                <div class="col-2"></div>

                <div class="col-8">

                <form action="form-handler.php" method="post">
                    <div class="mb-3">
                        <input type="text" class="feedback-input form-control" id="input-name" name="data-name" placeholder="Nom">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="feedback-input form-control" id="input-email" name="data-email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="feedback-input form-control" id="input-object" name="data-object" placeholder="Objet">
                    </div>
                    <div class="mb-1">
                        <textarea name="data-message" class="feedback-input" id="textarea-email" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" class="form-control" id="submit-form-control" rows="3">Envoyer</button>
                    </div>
                </form>

                </div>
                <div class="col-2"></div>
                <div class="row mt-5 mb-5">
            <div class="col-12">
                    <?php
                        if (!empty($_SESSION['success'])) {
                            echo '<div class="alert alert-success" role="alert">'.
                            $_SESSION['success'].'</div>';
                            $_SESSION['success'] = '' ;
                        }
                        if (!empty($_SESSION['error'])) {
                            echo '<div class="alert alert-danger" role="alert">'.
                            $_SESSION['error'].'</div>';
                            $_SESSION['error'] = '' ;
                        }
                    ?>
                </div>
            </div>
            </div>
            </section>


        <script src="../assets/scripts/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
