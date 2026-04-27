<?php

// chargement de la confiqguration de la DB
require_once 'config-dev.php';

// tentative de connexion 
try{
    $db = new PDO (
        dsn: MARIA_DSN,
        username: DB_CONNECT_USER,
        password: DB_CONNECT_PWD,
    );

// bonne pratique utilisons -Exception plutôt que -PDOException
// => Pour n'utiliser qu'un seul gestionaitr d'errer
}catch (Exception $e){
    die("Numéro d'erreur {$e -> getCode()} <br> Message d'erreur {$e->getMessage()}");
}