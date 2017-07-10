
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>connexion</title>
</head>
<body>
    <?php include_once '../Partial/header.php' ?>
    <h2>Connexion</h2>
    <form action='../Controller/connexionProcess.php' method='POST'>
        <input type='text' name='login' id='login' placeholder='Login'>
        <br/>
        <input type='password' name='mdp' id='mdp' placeholder='Mdp'>
        <input type='submit' value='Validez'>
    </form>
    <a href='../View/inscription.php'>Pas encore inscrit?</a>
</body>
</html>