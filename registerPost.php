<?php

// Variables d'environnements

$dsn = ("mysql:host=localhost;dbname=authentificationBdd");
$username = 'phpUser';
$password = '3f7zhhRn4NH69R';

try{
    
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recuperer Les données du formulaires d'inscription

    $nameForm = $_POST['name'];
    $surnameForm = $_POST['surname'];
    $pseudoForm = $_POST['pseudo'];
    $emailForm = $_POST['email'];
    $passwordForm = $_POST['password'];

    // Vérifier l'unicité de l'adresse mail

    $query="SELECT * FROM users WHERE email= :email ";
    $stmt= $pdo->prepare($query);
    $stmt->bindParam(':email', $emailForm);
    $stmt->execute();

    // Est-ce que l'utilisateur(mail) existe déja !!
     
    if($stmt->rowCount() > 0){
        die("Cette adresse mail existe déjà !!!");
    }

    // Hashage(cryptage) du mot de passe

    $hashedPassword = password_hash($emailForm, PASSWORD_DEFAULT);

    // Inserer les données dans la base

    $insertQuery = "INSERT INTO users(name, surname, pseudo, email, password) VALUES(:name, :surname, :pseudo, :email, :password)";
    $stmt= $pdo->prepare($insertQuery);
    $stmt->bindParam(":name", $nameForm);
    $stmt->bindParam(":surname", $surnameForm);
    $stmt->bindParam(":pseudo", $pseudoForm);
    $stmt->bindParam(":email", $emailForm);
    $stmt->bindParam(":password", $hashedPassword);
    $stmt->execute();

    echo "Inscription reussie !!";

}catch(Exception $e){
    echo "Impossible de de s'inscrire: " . $e->getmessage();
}