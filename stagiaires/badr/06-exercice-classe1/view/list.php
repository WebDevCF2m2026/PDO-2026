
<?php


// On récupère les messages
$messages = selectAllMessage($db);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voir les avis</title>

    <style>
        body {
            font-family: Arial, sans-serif;
          background: linear-gradient(90deg, rgba(70, 163, 235, 1) 0%, rgba(65, 166, 217, 1) 0%, rgba(109, 133, 132, 1) 100%);
            margin: 0;
        }

        .container {
            max-width: 620px;
            height: 550px;
            margin: 50px auto;
            background:  #ffffff9d ;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
           
        overflow-y: auto;
       overflow-x: hidden;

        }

        h1 {
            text-align: center;
            color: #fdfdfd;
            margin : 100px
        }

        .back {
            display: block;
            text-align: center;
            margin-bottom: 20px;
            text-decoration: none;
            color: #fafafa;
            font-weight: bold;
        }

        .message {
            background: #f9f9ff;
            border-left: 5px solid #667eea;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .message:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .message h3 {
            margin: 0;
            font-size: 0.9rem;
            color: #555;
        }

        .message p {
            margin-top: 8px;
            line-height: 1.5;
            
        }

        .date {
            font-size: 0.8rem;
            color: #999;
        }

        .empty {
            text-align: center;
            color: #777;
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

 <h1>💬 Avis des voyageurs</h1>

    <a href="?page=homepage" class="back">⬅ Retour à l'accueil</a>
<div class="container">

   

    <?php if (empty($messages)): ?>
        <p class="empty">Aucun avis pour le moment 😢</p>
    <?php else: ?>

        <?php foreach ($messages as $msg): ?>
            <div class="message">

                <h3>
                    <?= htmlspecialchars($msg['email_message']) ?>
                </h3>

                <p>
                    <?= nl2br(htmlspecialchars($msg['texte_message'])) ?>
                </p>

                <div class="date">
                    <?= htmlspecialchars($msg['date_message']) ?>
                </div>

            </div>
        <?php endforeach; ?>

    <?php endif; ?>

</div>

</body>
</html>
