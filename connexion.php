<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action='profileConnected.php' method='POST'>
        <label for='login'>Login : </label>
        <input type='text' name='login' id='login'>
        <br/>
        <label for='mdp'>Mdp : </label>
        <input type='password' name='mdp' id='mdp'>
        <input type='submit' value='Validez'>
    </form>
    <a href='inscription.php'>Pas encore inscrit?</a>
</body>
</html>