<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
    <link rel="stylesheet" href="css/style.css">
</head>

 
<body>
    <div class="container">
        <header>
            <h1>Livre d'or</h1>
            <p>Laissez-nous un message !</p>
        </header>
 
        <main>
            <?php
            // on a tenté d'énvoyer le formulaire et
            // il a passé les protection frontend
            if (isset($insertMessage)):
                //
                if ($insertMessage === false):
            ?>
                   <div class="non-insert-message">
                        <p>Echec</p>
                        <script>
                            setTimeout(function() {
                                window.location.href = './';
                            }, 2000);
                        </script>
                    </div>
 
                <?php
                else:
                ?>
                    <div class="insert-message">
                        <p>Merci pour votre votre message, vous allez etre rederigé</p>
                        <script>
                            setTimeout(function() {
                                window.location.href = './';
                            }, 2000);
                        </script>
                    </div>
            <?php
                endif;
            endif; ?>
 
 
 
 
            <!-- Formulaire d'ajout -->
            <section class="form-section">
                <form id="guestbook-form" method="POST">
                    <div class="form-group">
                        <label for="email_message">Votre email</label>
                        <input type="text" id="email_message" name="email_message" placeholder="Ex: JeanneLiHassan@cf2m.be">
                    </div>
 
                    <div class="form-group">
                        <label for="texte_message">Votre message</label>
                        <textarea id="texte_message" name="texte_message" rows="4" placeholder="Ce que vous avez pensé de votre visite..."></textarea>
                    </div>
 
                    <button type="submit" class="submit-btn">Publier le message</button>
                </form>
            </section>
 
            <!-- Liste des messages -->
            <section class="messages-section">
                <h2>Messages récents</h2>
                <div id="messages-container">
                   
                    
                   
                </div>
            </section>
        </main>
    </div>
 
</body>
 
</html>
 