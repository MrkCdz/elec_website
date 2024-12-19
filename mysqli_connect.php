<?php
$dbcon = @mysqli_connect('localhost', 'markcadiz1', 'markcadiz123', 'members_cadiz')
OR die('Could not connect to MySQL. Error in '.mysqli_connect_error());
mysqli_set_charset($dbcon, 'utf8');
?>
