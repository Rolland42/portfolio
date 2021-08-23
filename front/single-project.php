<?php

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        require_once('../db-connect.php');
        $id = strip_tags($_GET['id']);
        $sql = 'SELECT * FROM `projects` WHERE `project_id`=:id';
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch();
    } else {
        echo 'id manquant';
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$result['project_title']?> </title>
    <link rel="icon" type="image/png" href="../assets/images/front/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/styles/bootstrap-custom.css" />
    <link rel="stylesheet" href="../assets/styles/scrollbar.css" />
    <link rel="stylesheet" href="../assets/styles/navbar.css" />
    <link rel="stylesheet" href="../assets/styles/main.css" />

</head>
<body>

        
        



<div class="container">
  <div class="row align-items-start">
    <div class="col-sm-12 col-md-4">
        <figure><img style="margin-top:120px; width: 360px;" src="../assets/images/projects/<?= $result['project_picture']; ?>"></figure>

    </div>
    <div class="col-sm-12 col-md-8">

    <div class="main__circles">
                <div class="main__first-circle"></div>
                <div class="main__second-circle"></div>
            </div>
            <h2 class="section__contact--form mb-5 s-3"><?=$result['project_title']?> </h2>

        
        <p><?=$result['project_context']?></p>
        <p><?=$result['project_specs']?></p>
        <br>

        
    <a href="index.php"><button class="btn btn-primary" id="submit-form-control">Retour</button></a>
    </div>
  </div>
</div>




</body>
</html>