<?php

if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confirmation']) && !empty($_POST['confirmation'])){
      
      if ($_POST['password'] === $_POST['confirmation']) {
      require_once('../db-connect.php');
      $username = strip_tags( $_POST['username']);
      $email = strip_tags($_POST['email']);
      $password = strip_tags($_POST['password']);
      $confirmation = strip_tags($_POST['confirmation']);
     
            $passwordhash = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(username,email,password) VALUES(:username,:email,:password)";
            $query = $db->prepare($sql);
            $query->bindValue(':username', $username, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':password', $passwordhash, PDO::PARAM_STR);
            $query->execute();
            echo 'success';
            echo '<br><a href="index.php">retour</a>';
      }else{
            echo 'les mots de passe ne correspondent pas';
      }
}else{
   echo 'remplissez tout les champs du formulaire';   

}


