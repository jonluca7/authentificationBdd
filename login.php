<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <form action="loginPost.php" method="POST">
        <h1>Connexion</h1>
     
        <!-- Email -->
            <label for="email">Adress E-mail :</label><br/>
            <input type="email" name="email" required /><br/><br/>

        <!-- password -->
            <label for="password">Mot de Passe :</label><br/>
            <input type="password" name="password" required /><br/><br/>

        <!-- Button -->
         <input type="submit" value="Se Connecter">
    
    </form>
</body>
</html>