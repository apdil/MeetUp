<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <form action='removeButtProcess.php' method='POST'>
        <input type='hidden' value=<?php echo $eventName; ?> name='eventName'>
        <input type='submit' value='Delete'>
    </form>
</body>
</html>