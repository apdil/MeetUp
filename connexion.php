<?php
session_start();
include_once './DataBase.php';

if(isset($_GET['login'])){
    
$login = $_GET['login'];
$mdp = $_GET['mdp'];

$connect = new DataBase();

}
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
    <form action='profileConnected.php' methode='GET'>
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