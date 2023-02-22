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
    <title>MMI Foundry - Portfolio - Chloé Deschamps</title>
</head>
<body>

<?php
include('header.php');
?>

<div class="sr page-projet">

    <div class="titre">
        <h1>MMI Foundry </h1>
        <div class="split-titre"></div>
    </div>

    <div class="presentation">
        <div class="photo-p">
            <img src="../img/mmi_foundry_logo.png" alt="MMI Foundry" name="ceram">
        </div>
        <div class="split-presentation"></div>
        <p>MMI Foundry est une founderie (fictive) repondant à la commande : créer un environnement graphique et une identité pour une fonderie numérique. Le projet a été réalisé dans le cadre du module d'esthétique et création artistique en première année de DUT Métiers du Multimédia et de l'Internet.</p>
    </div>

    <div class="list-logiciels">
        <div class="split-l"></div>
        <p>Photoshop <br> Illustrator </p>
    </div>

    <div class="rubs">

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Affiche et investissement de l'espace</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/mmi_foundry1.png" alt="MMI Foundry"></div>
                <div><img src="../img/mmi_foundry2.png" alt="MMI Foundry"></div>
            </div>
        </div>

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Mockups et maquette</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/mmi_foundry3.png" alt="MMI Foundry"></div>
                <div><img src="../img/mmi_foundry4.png" alt="MMI Foundry"></div>

            </div>
        </div>
        
    </div>
</div>
<?php 
include('footer.php');
?>

</body>
</html>