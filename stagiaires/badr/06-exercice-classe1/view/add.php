
<?php



$success = null;
$error = null;

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email_message'] ?? '';
    $message = $_POST['texte_message'] ?? '';

    if (insertMessage($db, $email, $message)) {
        $success = "✅ Votre avis a été ajouté !";
    } else {
        $error = "❌ Erreur : vérifiez vos données.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un avis</title>

    <style>
        body {
            font-family: Arial, sans-serif;
      background: #46a3eb;
background: linear-gradient(90deg, rgba(70, 163, 235, 1) 0%, rgba(65, 166, 217, 1) 0%, rgba(109, 133, 132, 1) 100%);
            margin: 0;
        }

        .container {
            max-width: 400px;
            margin: 60px auto;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin : 250px auto; ;
        }

        h1 {
            text-align: center;
            color: #4a47a3;
        }

        a {
            text-decoration: none;
            color: #667eea;
              font-family: Arial, Helvetica, sans-serif
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 93%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        input:focus, textarea:focus {
            border-color: #667eea;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background: #5a67d8;
        }

        .success {
            background: #e6ffed;
            color: #2e7d32;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .error {
            background: #ffe6e6;
            color: #c62828;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .back {
            display: block;
            text-align: center;
            margin-bottom: 20px;
        }
          nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0,0,0,0.6);
            padding: 14px;
            text-align: center;
        }
           nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>
    <nav>
    <a href="?page=homepage">Accueil</a>
    <a href="?p=add">Ajouter avis</a>
    <a href="?p=list">Voir avis</a>
</nav>


<div class="container">
    <h1>✍️ Ajouter un avis</h1>

    <a href="?page=homepage" class="back">⬅ Retour à l'accueil</a>

    <?php if ($success): ?>
        <div class="success"><?= $success ?></div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="error"><?= $error ?></div>
    <?php endif; ?>


<form method="POST">

    <div class="form-group">
        <label>Nom complet</label>
        <input type="text" name="nom_complet" required>
    </div>

    <div class="form-group">
        <label>Titre</label>
        <input type="text" name="titre_message" placeholder="Ex: Super voyage" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email_message" required>
    </div>

    <div class="form-group">
        <label>Votre avis</label>
        <textarea name="texte_message" rows="4" required></textarea>
    </div>

    <button type="submit">Publier</button>

</form>

</div>

</body>
</html>
