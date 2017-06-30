<?php
$file = $_GET['file'];
unlink('event/' . $file);
header('Location:profileConnected.php')
?>