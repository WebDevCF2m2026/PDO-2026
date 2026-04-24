<?php
# stagiaires/Laetitia/02-connection-with-constent/index.php

// Chargement des dépendances
require_once 'config-dev.php';

// On veut se connecter (essai)
try {
    // Tentative de connexion
    $db = new PDO(
                // mysql:
    dsn:        DB_CONNECT_TYPE.":".
                // host=localhost
                "host=".DB_CONNECT_HOST .
                // ;dbname=listepays
                ";dbname=".DB_CONNECT_NAME .
                // ;port=1107
                ";port=".DB_CONNECT_PORT .
                // ;charset=utf8mb4;
                ";charset=".DB_CONNECT_CHARSET . ";"
        ,

    username: "",
    password: "",
    );
// En cas d'etteur (équivalent $e = new PDOException)
}catch(PDOException $e) {
    // On récupère l'erreur et on l'affiche
    echo "Erreur numéro : ".$e->getCode(); // Le code
    echo "<br>Message de l'Erreur : ".$e->getMessage(); // Le message
}