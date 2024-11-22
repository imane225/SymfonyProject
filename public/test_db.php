<?php
try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=test2', 'root', '');
    echo "Connexion réussie !";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
