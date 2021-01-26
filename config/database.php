<?php
try {
$dbh = new PDO('mysql:host=localhost;dbname=blog', 'steve', 'linuxsql');
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}