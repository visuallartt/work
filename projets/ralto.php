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
    <title>Ralto - Portfolio - Chloé Deschamps</title>
</head>
<body>

<?php
include('header.php');
?>

<div class="sr page-projet">

    <div class="titre">
        <h1>Ralto </h1>
        <div class="split-titre"></div>
    </div>

    <div class="presentation">
        <div class="photo-p">
            <img src="../img/ralto_logo.png" alt="Ralto" name="ralto">
        </div>
        <div class="split-presentation"></div>
        <p>Ralto est une marque (fictive) revisitant une célèbre enseigne proposant des soupes lyophilisées. Les livrables sont les suivants : un logo et une charte graphique, une copie strategy, 3 affiches et des mockups. Le projet a été réalisé dans le cadre du module gestion de projet en première année de DUT Métiers du Multimédia et de l'Internet.</p>
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
                <div><img src="../img/ralto1.png" alt="Ralto"></div>
            </div>
        </div>

        <div class="rub">
            <div class="titre-rub">
                <div class="rect-rub"></div>
                <h4>Mockups et affiches</h4>
            </div>
            <div class="img-rub">
                <div><img src="../img/ralto2.png" alt="Ralto"></div>
                <div><img src="../img/ralto3.png" alt="Ralto"></div>

            </div>
        </div>
        
        
    </div>
</div>
<?php 
include('footer.php');
?>

</body>
</html>