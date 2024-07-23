<?php


    $dsn = 'mysql:host=localhost;dbname=authentificationBdd';
    $username = 'phpUser';
    $password = '3f7zhhRn4NH69R';

try{
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les utilateurs

    $query = "SELECT * FROM users";
    $stmt = $pdo->query($query);
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

  // Afficher les utilisateurs

  foreach($users as $user){
    echo "ID : " . $user['idUser']. "<br>";
    echo "Nom : " . $user['name']. "<br>";
    echo "Prenom : " . $user['surname']. "<br>";
    echo "Email: " . $user['email']. "<br>";
    echo "<br>";
  }

}catch(Exception $e){
    echo "Connexion impossible à la base de données:" . $e->getmessage();
}