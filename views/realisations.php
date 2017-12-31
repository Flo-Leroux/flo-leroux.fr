
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Florian Leroux | Mes réalisations</title>

    <!-- Add Only Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Add Scripts -->
        <!-- Add Plugins -->
    <script src="../deploy/modernizr.custom.js"></script>
    <script src="../deploy/isotope.pkgd.min.js"></script>
    <script src="../deploy/imagesloaded.pkgd.min.js"></script>
    <script src="../deploy/masonry.pkgd.min.js"></script>
    <script src="../deploy/dynamics.min.js"></script>
    <script src="../deploy/classie.js"></script>
    <script src="../deploy/animOnScroll.js"></script>
    
        <!-- Others -->
    <script src="../js/menu.js"></script>
    <script src="../js/realisations.js"></script>
    
    <!-- Addd Styles -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/isogrid.css" />

    <link rel="stylesheet" href="../css/variables.css">
    <link rel="stylesheet" href="../css/animations.css">

    <link rel="stylesheet" href="../css/revealer.css">
    <link rel="stylesheet" href="../css/menu.css">
    
    <link rel="stylesheet" href="../css/realisations.css">
</head>
    <body>
        <?php
        require '../engine/Json.php';
        
        require 'revealer.html';
        ?>
           
        <?php $portfolio = readJSON("../json/", "portfolio"); ?>
        
        <div class="isolayer isolayer--scroll1 isolayer--shadow">
            <ul id="grid--isotope" class="grid grid--effect-flip">
                <?php
                foreach($portfolio as $item) {
                ?>
                    <li id="element--<?php echo $item->id; ?>" class="grid__item element--isotope transition <?php echo $item->type; ?>">
                        <a class="grid__link" hrefA="<?php echo $item->local; ?>">
                            <img class="grid__img layer" src="../<?php echo $item->img; ?>" alt="<?php echo $item->img_description; ?>">
                            <span class="grid__title"><?php echo $item->title; ?></span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
    
            <div id="scroll"></div>
        </div>

        <ul id="navFilter--isotope">
            <li id="all" class="filter--current">Tous</li>
            <li id="web">Web</li>
            <li id="mobile">Mobile</li>
        </ul>

        <?php
            require 'menu.phtml';
        ?>
        <script src="../deploy/isogrid.js"></script>
        
    </body>
</html>