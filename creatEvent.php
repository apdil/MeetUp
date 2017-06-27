<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2>Creat your Event</h2>
    <form action='eventProcess.php' methode='GET'>
        <label for='nom'>Nom : </label>
        <input type='text' name='nom' id='nom'>
        <br/>
        <label for='lieu'>Lieu : </label>
        <input type='text' name='lieu' id='lieu'>
        <br/>
        <label for='dure'>Durée : </label>
        <input type='text' name='dure' id='dure'>
        <br/>
        <input type='radio' name='categorie' id='categorie' value='Fete'>Fete
        <input type='radio' name='categorie' id='categorie' value='Travaille'>Travaille
        <input type='radio' name='categorie' id='categorie' value='Aide'>Aide
        <input type='radio' name='categorie' id='categorie' value='Partage'>Partage
        <br/>
        <label for='date'>Date : </label>
        <input type='date' name='date' id='date'>
        <br/>
        <label for='descript'>Description : </label>
        <input type='text' id='descript' name="descript">
        <br/>
        <label for='capacite'>Capacité : </label>
        <input type='text' name='capacite' id='capacite'>
        <br/>
        <label for='ressource'>Ressource : </label>
        <input type='text' name='ressource' id='ressource'>
        <br/>
        <input type='submit' value='valider'>
    </form>
    </body>
</html>
