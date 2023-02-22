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
    <title>Refonte ZEvent - Portfolio - Chloé Deschamps</title>
</head>
<body>

<?php
include('header.php');
?>

<div class="sr page-projet">

    <div class="titre">
        <h1>Refonte Z-Event </h1>
        <div class="split-titre"></div>
    </div>

    <div class="presentation">
        <div class="photo-p">
            <img src="../img/zevent1.png" alt="zevent" name="zevent">
        </div>
        <div class="split-presentation"></div>
        <p>Refonte de l'événement Z-Event dans le cadre du module d'infographie en année de licence professionnelle Métiers du Numérique. Les livrables sont les suivants : un logo et ses variantes, une charte graphique (couleur, typographie, pattern), une maquette de site web (versions desktop et mobile) ainsi qu'une affiche type metro. </p>
    </div>

    <div class="list-logiciels">
        <div class="split-l"></div>
        <p>Photoshop <br> Illustrator <br> InDesign</p>
    </div>

    <div class="rubs">

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Logo</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/zevent_logo.png" alt="zevent"></div>
            </div>
        </div>

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Identité graphique</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/zevent2.png" alt="zevent"></div>
                <div><img src="../img/zevent3.png" alt="zevent"></div>

            </div>
        </div>

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Print et web-design</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/zevent4.png" alt="zevent"></div>
                <div><img src="../img/zevent5.png" alt="zevent"></div>

            </div>
        </div>
        
    </div>
</div>
<?php 
include('footer.php');
?>

</body>
</html>