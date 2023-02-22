<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">   
    <link rel="icon" type="image/png" href="../img/logo.png" />
    <title>Beany Sound - Portfolio - Chloé Deschamps</title>
</head>
<body>

<?php
include('header.php');
?>

<div class="sr page-projet">

    <div class="titre">
        <h1>Beany Sound </h1>
        <div class="split-titre"></div>
    </div>

    <div class="presentation">
        <div class="photo-p">
            <img src="../img/beany_sound_logo.png" alt="ceram illus 1" name="ceram">
        </div>
        <div class="split-presentation"></div>
        <p>Beany Sound est une start-up (fictive) fabriquant des bonnets connectés. Pour son lancement, la marque lance son tout premier modèle :  AX-21. Le projet a été réalisé dans le cadre du module gestion de projet et écriture pour les médias numériques en deuxième année de DUT Métiers du Multimédia et de l'Internet.</p>
    </div>

    <div class="list-logiciels">
        <div class="split-l"></div>
        <p>Photoshop <br> Illustrator <br> </p>
    </div>

    <div class="rubs">

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Identité graphique</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/beany_sound1.png" alt="Beany Sound"></div>
            </div>
        </div>

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Visuels</h4>
            </div>
            <div class="img-rub" style="flex-direction:column;">
                <div><img src="../img/beany_sound2.png" alt="Beany Sound"></div>
                <div style="height:40vh; width:auto;"><img src="../img/beany_sound3.gif" alt="Beany Sound" ></div>
            </div>
        </div>
        
        
    </div>
</div>
<?php 
include('footer.php');
?>

</body>
</html>