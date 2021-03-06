<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href='../style.css'>  
    <title>Inscription</title>
</head>
<body>
    <?php include_once '../Partial/header.php'; ?>
    <h2>Je suis...</h2>
    <form action='../Controller/inscriptionProcess.php' method='post'>
        <label for='nom'>Nom : </label>
        <input type='text' name='nom' id='nom'>
        <br/>
        <label for='prenom'>Prenom : </label>
        <input type='text' name='prenom' id='prenom'>
        <br/>
        <label for='login'>Login : </label>
        <input type='text' name='login' id='login'>
        <br/>
        <label for='mdp'>Mdp : </label>
        <input type='password' name='mdp' id='mdp'>
        <br/>
        <label for='region'>Region : </label>
        <input list="region" type="text" name='region'> 
        <datalist id='region'>
            <option value="Auvergne-Rhône-Alpes">
            <option value="Bourgogne-Franche-Comté">
            <option value="Bretagne">
            <option value="Centre-Val de Loire">
            <option value="Corse">
            <option value="Grand Est">
            <option value="Hauts-de-France">
            <option value="Normandie">
            <option value="Nouvelle-Aquitaine">
            <option value="Occitanie">
            <option value='Pays de la Loire'>
            <option value='Provence-Alpes-Côte d\'Azur'>
        </datalist>
        <br/>
        <label for='naissance'>Date de naissance : </label>
        <input type='date' name='date' id='date'>
        <br/>
        <label for='email'>Email : </label>
        <input type='email' name='email' id='email'>
        <br/>
        <label for='genre'>Genre : </label>
        <input type='radio' name='genre' id='genre' value='Homme'>Homme
        <input type='radio' name='genre' id='genre' value='Femme'>Femme
        <br/>
        <label for='interet'>Interet : </label>
        <input type='checkbox' name='interet[]' value='fete'>Fete
        <input type='checkbox' name='interet[]' value='voyage'>Voyage
        <input type='checkbox' name='interet[]' value='music'>Music
        <input type='checkbox' name='interet[]' value='art'>Art
        <input type='checkbox' name='interet[]' value='high-tech'>High-tech
        <input type='checkbox' name='interet[]' value='apprendre'>Apprendre
        <input type='checkbox' name='interet[]' value='sport'>Sport
        <input type='checkbox' name='interet[]' value='aider'>Aider
        <input type='checkbox' name='interet[]' value='travail'>Travail
        <br/>
        <input type='submit' value='Validez'>
    </form>
</body>
</html>