
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href='../style.css'>      
    <title>connexion</title>
</head>
<body class='container-fluid'>
    <?php include_once '../Partial/header.php'; ?>
    <main class='container-fluid d-md-flex'>
        <section class='container col-md-4 borderRight'>
            <h2 class='d-flex justify-content-md-end justify-content-sm-center mb-6'>Connexion</h2>
            <form action='../Controller/connexionProcess.php' method='POST'>
                <div class="form-group">
                    <input type='text' class="form-control width-input" name='login' id='login' placeholder='Login'>
                </div>
                <br/>
                <div class="form-group">        
                    <input type='password' class="form-control width-input" name='mdp' id='mdp' placeholder='Mdp'>
                </div>
                <input type='submit' class="btn btn-primary" value='Validez'>
            </form>
        </section>
        <section class='container col-md-8'>
            <h2 class='d-flex justify-content-md-start justify-content-sm-center mb-5'>Inscription</h2>
            <div class='container d-flex'>
                <div class='container col-md-7 d-flex flex-column justify-content-around'>
                    <input type='submit' class="btn btn-primary mb-5" value='GOOGLE'>
                    <input type='submit' class="btn btn-primary mb-5" value='TWITTER'>
                    <input type='submit' class="btn btn-primary" value='FACEBOOK'>
                </div>
                <a href='../View/inscription.php'>
                    <input type='submit' class="btn btn-primary" value='Je crée un compte'>
                </a>
            </div>
        </section>
    </main>
</body>
</html>