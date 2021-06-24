	 	project_title		
		project_begin				
		project_end			
		project_context	
		project_specs	
  	    project_githublink	
		project_link	
		


    isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) 
	&& !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) 
	&& isset($_POST['confirmation']) && !empty($_POST['confirmation'])


	 $nomOrigine = $_FILES['project_picture']['name'];
                $elementschemin = pathinfo($nomOrigine);
                echo '<pre>';
                print_r($elementschemin);
                echo '</pre>';