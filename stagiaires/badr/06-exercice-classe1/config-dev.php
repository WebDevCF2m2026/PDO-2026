
<?php

# CONFIG DEV
const DB_CONNECT_TYPE = "mysql";
const DB_CONNECT_HOST = "localhost";
const DB_CONNECT_PORT = 3307;
const DB_CONNECT_NAME = "livreor_web1";
const DB_CONNECT_CHARSET = "utf8mb4";
const DB_CONNECT_USER = "root";
const DB_CONNECT_PWD = "";

const DB_DSN = DB_CONNECT_TYPE . 
    ":host=" . DB_CONNECT_HOST . 
    ";dbname=" . DB_CONNECT_NAME . 
    ";port=" . DB_CONNECT_PORT . 
    ";charset=" . DB_CONNECT_CHARSET;

// Connexion PDO
try {
    $db = new PDO(DB_DSN, DB_CONNECT_USER, DB_CONNECT_PWD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur connexion DB : " . $e->getMessage());
}
const ARRAY_VALID_PAGES=[
'add',
'list',
];
// Chemin projet
const PROJECT_PATH = __DIR__;
