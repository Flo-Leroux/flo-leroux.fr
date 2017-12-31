
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | Florian Leroux</title>
    
    <!-- Add Only Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Add Scripts -->
        <!-- Add Plugins -->
    <script src="../deploy/modernizr.custom.js"></script>
    <script src="../deploy/classie.js"></script>
    
        <!-- Others -->
    <script src="../js/menu.js"></script>
    <script src="../js/contact.js"></script>

    <!-- Addd Styles -->
    <link rel="stylesheet" href="../css/normalize.css">

    <link rel="stylesheet" href="../css/variables.css">
    <link rel="stylesheet" href="../css/animations.css">

    <link rel="stylesheet" href="../css/revealer.css">
    <link rel="stylesheet" href="../css/menu.css">
    
    <link rel="stylesheet" href="../css/contact.css">
</head>
    <body>
        <?php
        require 'revealer.html';
        ?>
        <div id='rectangle'>
            <section>
                <h2>Contactez-moi</h2>
                <form action="../engine/email.php" method='GET' enctype="text/plain">
        
                    <div id="emailDiv">
                        <label for="email">Votre adresse email</label>
                        <input type="email" name="email" id="emailInput" required placeholder='mon-adresse-mail@gmail.com'>
                        <button onclick="javascript:nextForm()">Suite</button>
                    </div>
                
                    <div id="messageDiv">
                        <label for="message">Votre message</label>
                        <textarea name="message" id="messageInput" cols="30" rows="10" required placeholder="Bonjour Flo, je te contacte pour..."></textarea>
                        <button type="submit" name="submit">Envoyer</button>
                    </div>
                </form>
            </section>
        </div>

        <?php
        require 'menu.phtml';
        ?>
    </body>
</html>
