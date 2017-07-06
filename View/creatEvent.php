<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2>Creat your Event</h2>
    <form action='../Controller/creatEventProcess.php' method='POST'>
        <label for='nom'>Nom : </label>
        <input type='text' name='nom' id='nom'>
        <br/>
        <label for='lieu'>Lieu : </label>
        <input type='text' name='lieu' id='lieu'>
        <br/>
        <label for='dure'>Durée : </label>
        <input type='text' name='dure' id='dure'>
        <br/>
        <input type='checkbox' name='categorie[]' value='fete'>Fete
        <input type='checkbox' name='categorie[]' value='voyage'>Voyage
        <input type='checkbox' name='categorie[]' value='music'>Music
        <input type='checkbox' name='categorie[]' value='litterature'>Litterature
        <input type='checkbox' name='categorie[]' value='high-tech'>High-tech
        <input type='checkbox' name='categorie[]' value='apprendre'>Apprendre
        <input type='checkbox' name='categorie[]' value='sport'>Sport
        <input type='checkbox' name='categorie[]' value='aider'>Aider
        <input type='checkbox' name='categorie[]' value='travail'>Travail
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
