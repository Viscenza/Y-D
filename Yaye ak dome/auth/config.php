<?php
try {
  $bd = new PDO('mysql:host=localhost;dbname=mum;charset=utf8', 'root', '');
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
?>