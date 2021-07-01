<?php
    require_once('../db-connect.php');
    $sql= 'SELECT * FROM `projects`';
    $query= $db->prepare($sql);
    $query->execute();
    $result= $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio de Sonia</title>
	<link rel="stylesheet" href="cards.css">
	
</head>
<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<?php
	foreach ($result as $project) {
?>
	<div id="container">	
    <div class="product-details">
            
        <h1><?=$project['project_title'];?></h1>
            
                <p class="information"><?=$project['project_context']?></p>

            
            
        <div class="control">

        <a href="single-project.php?id=<?=$project['project_id'] ?>">
            <button class="btn">
                <span class="project-link">Voir le projet</span>
            <span class="link-animation"><?=$project['project_title'];?></span>
            <span class="link-icon"><i class="fa fa-link"></i></span>
            </button>
        </a>
        </div>
                
    </div>
	
    <div class="project-image">
        
        <img  src="../assets/images/<?=$project['project_picture']?>"  alt="">
        

        <div class="info">
            <h2>Technologies</h2>
            <ul>
                <li>
                <?=$project['project_specs'] ?>
                </li>
                
    </ul>
        </div>
        
    </div>

</div>


<?php
    }
?>

</body> 
</html>