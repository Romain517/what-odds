<?php
$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
$bet = $bdd->query('SELECT * FROM bet')
while($a = $reponse->fetch())
?>