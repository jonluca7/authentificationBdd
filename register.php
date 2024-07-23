<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>

    <form action="registerPost.php" method="POST">

        <label for="name">Nom: </label><br>
       <input type="text" name="name"><br><br>

       <label for="surname">Prenom: </label><br>
       <input type="text" name="surname"><br><br>

       <label for="pseudo">Pseudo: </label><br>
       <input type="text" name="pseudo"><br><br>

       <label for="email">Adress E-mail:</label><br>
       <input type="email" name="email" required><br><br>

       <label for="password">Mot de Passe:</label><br>
       <input type="password" name="password" required><br><br>

       <input type="submit" value="Se Connecter">

    </form>
</body>
</html>
