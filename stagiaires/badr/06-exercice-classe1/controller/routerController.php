
<?php

require_once PROJECT_PATH . "/model/MessageModel.php";

// Connexion DB
try {
    $connectDB = new PDO(DB_DSN, DB_CONNECT_USER, DB_CONNECT_PWD);
    $connectDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Erreur: " . $e->getMessage());
}
if (!isset($_GET['p'])){
    // nous sommes dans l'accueil
    include PROJECT_PATH."/view/homepage.html.php";
 
}elseif(in_array($_GET['p'],ARRAY_VALID_PAGES)){
 
     include PROJECT_PATH."/view/".$_GET['p'].".php";
}else {
     
    //  include ROOT_PROJECT."/view/error404.php";
}
 
// Initialisation
$insert = null;


if (!empty($_POST['email_message']) && !empty($_POST['texte_message'])) {

    $insert = insertMessage(
        $connectDB,
       
$nom = $_POST['nom_complet'],
$titre = $_POST['titre_message'],
$email = $_POST['email_message'] ,
$message = $_POST['texte_message'] 

    );
}

$messages = selectAllMessage($connectDB);

$connectDB = null;

//