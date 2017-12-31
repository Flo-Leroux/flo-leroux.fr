<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Add Only Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Add Scripts -->
        <!-- Add Plugins -->
    <script src="deploy/parallax.min.js"></script>
    <script src="deploy/classie.js"></script>

    <script src="js/loader.js"></script>
    <script src="deploy/loader.js"></script>

        <!-- Others -->
    <script src="js/menu.js"></script>

    <!-- Addd Styles -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/variables.css">
    <link rel="stylesheet" href="css/animations.css">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/revealer.css">
    <link rel="stylesheet" href="css/menu.css">

    <title>Accueil | Florian Leroux</title>

    <!-- Test Github Synch -->
</head>
    <body>

        <?php
        include 'engine/parallax.php';
        
        require 'engine/Json.php';
        
        require 'views/revealer.html';
        ?>
    
        <script src="js/index.js"></script>

        <!-- Background -->
        <div id="scene">
            <?php
            $path = 'assets/images/homepage/3000px/';
            $path700px = 'assets/images/homepage/700px/';
            $images = getParallaxHTML($path);
            $start_depth = 0.36;
            $start_zIndex = 0;
            foreach($images as $img) {
                ?>
                <picture style="z-index: <?php echo $start_zIndex; ?> ;" class="layer" data-depth="<?php echo $start_depth; ?>">
                    <source media="(max-width: 680px)" srcset="<?php echo $path700px.$img; ?>">
                    <img src="<?php echo $path.$img; ?>">
                </picture>
                <?php
                $start_depth = $start_depth - 0.03;
                $start_zIndex++;

                if($start_zIndex == 11) {
                    ?>
                    <div style="z-index: 11;" id="layer-text" class='layer' data-depth="0" >
                        <p id="tOne" class="text">flo <br> leroux</p>
                        <p id="tTwo" class="text">flo <br> leroux</p>
                        <p id="tThree" class="text">flo <br> leroux</p>
                    </div>
                    <?php
                    $start_zIndex++;
                }
            }
            ?>

            <li>
                <div id="div-blanche" class="layer" data-depth="0"></div>
            </li>
        </div>

        <!-- Links social network -->
        <ul id="home_reseaux">
            <li>
                <a href="https://www.linkedin.com/in/florian-leroux-ab5108137/" target='_blank'>
                    <img src="./assets/icons/linkedin.svg" alt="Profil Linkedin">
                </a>
            </li>
            <li>
                <a href="https://github.com/Flo-Leroux" target='_blank'>
                    <img src="./assets/icons/github.svg" alt="Profil Github">
                </a>
            </li>
        </ul>
        
        <?php
            require 'views/menu.phtml';
        ?>
    </body>
</html>