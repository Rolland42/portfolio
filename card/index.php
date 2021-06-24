<?php
session_start();

if($_SESSION['username']){
    echo $_SESSION['success'];
    require_once('../db-connect.php');
    $sql= 'SELECT * FROM `projects`';
    $query= $db->prepare($sql);
    $query->execute();
    $result= $query->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio de Sonia</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

	<div id="portfolio">
	  <body>
		<div>
		  <nav id="navbar">
			<div class="container barnav-border">
			  <ul id="navbar-ul">
				<li class="navbar-li">
				<a class=" navbar-a" href="#welcome-section">
				 Accueil
				</a></li>
			  <li class="navbar-li">
				<a class="navbar-a" href="#section-about">
				 A propos
				</a></li>
			  <li class="navbar-li">
				<a class="navbar-a" href="#projects">
				Projets
				</a></li>
			  <li class="navbar-li">
				<a class="navbar-a" href="#Contact">
				  Contact
				</a></li>
			  </ul>
			</div>
		</nav>
		</div>
		  <div id="section_1">
			<section id="welcome-section">
			  <p id="title_0">Sonia Rolland<p>
			  <h1 id="title_1">Web Designer</h1>
					  <div> 
						
	
			 <h4 class="wordCarousel">
			   <div id="wordAnimation"> 
			   <ul class="switchWord"> 
				
					<li class="word-li" id="designer">
					  Designer</li>
					<li class="word-li" id="artist">
					  Créatrice</li> 
					<li class="word-li" id="coder">
					  Programmer</li>
					
				</ul>
				</div>
			 </h4>
						<hr id="line-right">
						<hr id="line-left">
			</section>
		  </div>
			
			  <div id="section2">
			  <section id="section-about">
				<div id="title-about">
				  <h1 class="titles" id="aboutTitle">A propos</h1>
				</div>
				
				  <div id="circles">
				  <div id="circle"></div>
				  <div id="circle2"></div>
				  </div>
				<div id="firstDot" style="text-align:center">
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	  <span class="dot"></span>
	</div>
				<div class="blockquote">
			<h1 id="quote">Je me nomme Sonia.<span> Je suis actuellement en formation professionelle chez OnlineFormapro pour me reconvertir dans le domaine du Web Design. </span> Je me passionne pour divers centres d'intérêts, tels que le web, le dessin, la création, l'écriture, l'art, la photographie. </span></h1>
		</div>
				<div>
				  <img id="image-profil" src="img/photo.jpg">        
				</div>
			  </section>
			</div>
			
		  <div id="section_3">
			<section id="projects">
			  <h1 class="titles" id="portfolioTitle"><b>Portfolio</b></h1>
			
			  <div id="circles">
				  <div id="circle"></div>
				  <div id="circle2"></div>
				  </div>
				<div id="firstDot" style="text-align:center">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
		
			<div id="all-contenedores">   
			<?php
				foreach ($result as $project) {
			?>
			  <div id="contenedor1" class="project-tile">
			  <div id="image_1" class="container-fadeOverlay">
			  	<a href="project-detail.php?id=<?=$project['project_id'] ?>"><img class="project_pictures" src="../assets/images/<?=$project['project_picture']?>" class="miniatures" alt="Hero-Header"></a>
				<a href="project-detail.php?id=<?=$project['project_id'] ?>">
				<div class="overlay-images">
				  <div class="text-images"><?=$project['project_title']?></div>
				</div>
				</a>
			  </div>
				<div class="box-description" id="box1">
				  <p><?=$project['project_context']?></p>
				   <a href="project-detail.php?id=<?=$project['project_id'] ?>"><?=$project['project_title']?></a>
				</div>
			  </div>
			<?php
				}
			?>
			 <!-- 

			  <div id="contenedor1" class="project-tile">
			  <div id="image_1" class="container-fadeOverlay">
				<a title="Hero-Header" href="https://soniar.promo-68.codeur.online/hero-header/"><img id="project_1" src="img/" class="miniatures" alt="Hero-Header"></a>
				<a title="Hero-Header" href="https://soniar.promo-68.codeur.online/"><div class="overlay-images">
				  <div class="text-images">Hero-Header</div>
				</div></a>
			  </div>
				<div class="box-description" id="box1">
				  <p>Landing page créée pour apprendre l'utilisation de différents logiciels comme A.Illustrator</p>
				   <a href="https://soniar.promo-68.codeur.online/hero-header"><p>Hero-Header</p></a>
				   
				</div>
			  </div>

			  <div id="contenedor2" class="project-tile">
			  <div id="image_2" class="container-fadeOverlay">
				<img id="project_2" src="img/" alt="beeweb" class="miniatures">
				 <a title="beeweb" href="https:///soniar.promo-68.codeur.online/beeweb/pages/"><div class="overlay-images">
				  <div class="text-images">beeweb</div>
				   </div></a>
			  </div>
				  <div class="box-description" id="box2">
				  <p>Projet sur les métiers du web créé en binôme avec Mme Ralandison T. chez OnlineFormapro/AccessCodeSchool</p>
				   <a href="https://soniar.promo-68.codeur.online/beeweb/pages/"><p>beeweb</p></a>
				</div>
			  </div>
			  
			  <div id="contenedor3" class="project-tile">
			  <div id="image_3" class="container-fadeOverlay">
				<img id="project_3" src="img/" alt="Blindness" class="miniatures">
				<a title="Blindness" href="https://"><div class="overlay-images">
				  <div class="text-images">Blindness</div>
				  </div></a>
			  </div>
				<div class="box-description" id="box3">
				  <p>Projet sur la déficience visuelle créé en collaboration avec d'autres stagiaires chez AccessCodeSchool</p>
				   <a href="https://"><p>Blindness</p></a>
				</div>
			  </div>
				
				<div id="contenedor4" class="project-tile">
			  <div id="image_4" class="container-fadeOverlay">
				<img id="project_4" src="img/" alt="a11e" class="miniatures">
				<a title="a11e" href="https://"><div class="overlay-images">
				  <div class="text-images">a11e</div>
				  </div></a>
			  </div>
				   <div class="box-description" id="box3">
				  <p>Projet sur la surdité créé en collaboration avec d'autres stagiaires d'AccessCodeSchool</p>
				   <a href="https://"><p>a11e</p></a>
				</div>
			  </div> -->
		   
			</div>
			</section>
		  </div>
				
		   <div id="section4">
			
			  <section id="Contact">
				<div id="title-contact">
				  <h1 class="titles" id="contactTitle">Contact </h1>
				  
				  <div id="container-box">
					   <form>   
					<input name="name" type="text" class="feedback-input" placeholder="Nom" />   
					<input name="email" type="text" class="feedback-input" placeholder="Email" />
					<textarea name="text" class="feedback-input" placeholder="Message"></textarea>
					<input type="submit" value="SUBMIT"/>
				  </form>
				  <div>
				  <p id="textContact">s.rolland@codeur.online</p>
				  </div>
					<div id="symbol-code">
					</div>
					<div>
					  <a href="https://github.com/Rolland42" target="_blank" title="Github"><img id="logo-github" src="https://res.cloudinary.com/gwenyver/image/upload/v1598314997/Logos/GitHub-Mark-Light-64px_oypgfy.png" alt="github-logo">
					</div>
						<div>
					  <a title="LinkedIn" href="https://www.linkedin.com/in/sonia-rolland-5877281ba/" target="_blank"><img id="logo-linkedIn" src="https://res.cloudinary.com/gwenyver/image/upload/v1598388841/Logos/linkedin-3_bpcsja.png" alt="likedIn-logo"></a>
					</div>   
				  </div>
				</div>
					
			  </section>
			  </div>
	
	
	
	
	 <script src="main.js"></script>
	 
</body>
       
</html>