<?php

$dsn =("mysql:host=localhost;dbname=authentificationBdd");
$username = 'phpUser';
$password = '3f7zhhRn4NH69R';

try{

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupere les données du formulaire de connexion
        $emailForm = $_POST['email'];
        $passwordForm = $_POST['password'];

    // Récuperer les utilisateurs
       $query = "SELECT * FROM users WHERE email = :email";
       $stmt = $pdo->prepare($query);
       $stmt->bindParam(':email', $emailForm);
       $stmt->execute();
   
  // Est-ce que l'utilisateur mail existe

  if($stmt->rowCount() == 1){
     $monUser = $stmt->fetch(PDO::FETCH_ASSOC);

  if(password_verify($passwordForm, $monUser['password'])){

      echo "Connexion Reussie !! Bienvenue ". $monUser['name'].' '. $monUser['surname'];
  }else{
    echo "Mot de passe Incorrect !!";
  }
    }

   else{
    echo "Utilisateur introuvable ; êtes-vous sûr de votre mail !!";
   }

}catch(Exception $e){
    echo 'Connexion impossible de se connecter à la base de données :' . $e->getmessage();
}


?>