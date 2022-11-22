<?php
include 'header.php';
?>

<!-- Présentation TecHS  -->

<div class="bg-presentation container-fluid py-6">
    <div class="d-flex justify-content-center">
        <div class="whytechs d-flex flex-column ms-4 py-4">
            <h2 class="greentec">Pourquoi TecHS ?</h2>
            <p>Nous sommes là pour vous aider ! </br>
                Besoin d’un dépannage, d’une réparation ou
                encore d’un montage réalisé par un professionnel ? </br>
                N’hésitez pas à nous contacter </br>
                Nous prendrons soins de vos bijoux
                technologiques...</p>
        </div>
    </div>
    <div class="ecotechs-mid d-flex justify-content-center">
        <div class="ecotechs d-flex flex-column align-items-center py-4">
            <img class="" src="img/components/recycle-green.png" width="100" height="100">
            <p>La ou nous continuons de produire, consommer, jeter, </br>
                TecHS est une solution pour donner une seconde vie
                à vos appareils multimédias</p>
        </div>
    </div>
</div>

<!-- Services  -->

<div class="services-bg container-fluid py-6 text-center">
    <h1 class="rt">SERVICES</h1>
    <div class="container py-6">
        <div class="services-items d-flex justify-content-evenly">
            <div>
                <a href="depannage.php">
                    <div class="logo-depan"></div>
                </a>
                <p class="mt-3">Dépannage</p>
            </div>
            <div>
                <a href="reparation.php">
                    <div class="logo-repair"></div>
                </a>
                <p class="mt-3">Réparation</p>
            </div>
            <div>
                <a href="montage.php">
                    <div class="logo-montage"></div>
                </a>
                <p class="mt-3">Montage</p>
            </div>
        </div>
    </div>
</div>


<!-- Devis  -->

<div class="devis-bg container-fluid py-5">
    <div class="devis text-center">
        <h1 class="rt">DEVIS</h1>
        <h4>Diagnostique et devis par ici !</h4>
        <div class="devis-alt container py-5">
            <div class="devis-items d-flex justify-content-evenly">
                <div class="logo-devis-mobile">
                    <a href="#">
                        <div class="logo-devis"></div>
                    </a>
                </div>
                <div class="devis-carre py-2">
                    <p class="py-2">Le diagnostique peut se faire à distance ou à domicile </br> (En fonction de la
                        panne et de
                        votre localisation) </br> Pour en savoir plus :</p>
                    <p class="appeldevis py-2">Demandez votre devis gratuitement en cliquant sur le bouton ci
                        dessous :
                    </p>
                    <a class="btn btn-index-devis" href="devis.php" role="button">Devis gratuit</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Services star  -->

<div class="bg-star container-fluid py-5">
    <div class="star text-center">
        <h1 class="rt">SERVICES STAR</h1>
        <div class="container py-6">
            <div class="servicestar-items d-flex justify-content-evenly">
                <div class="star-items1 align-items-center pb-2 my-3">
                    <img src="img/components/index-servicestar-depan.png" alt="Dépannage">
                    <p>Dépannage (A domicile / A distance)</p>
                    <a class="btn btn-star1 my-2" href="depannage.php" role="button">Decouvrir l'offre</a>
                </div>
                <div class="star-items2 align-items-center pb-2 my-3">
                    <img src="img/components/index-servicestar-packclean.png" alt="Pack Clean">
                    <p>Pack Clean</p>
                    <a class="btn btn-star2 my-2" href="depannage.php" role="button">Decouvrir le Pack</a>
                </div>
                <div class="star-items3 align-items-center pb-2 my-3">
                    <img src="img/components/index-servicestar-screenrepair.png" alt="Réparation écran iPhone">
                    <p>Réparation écran (iPhone)</p>
                    <a class="btn btn-star3 my-2" href="reparation.php" role="button">Decouvrir l'offre</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Réseaux  -->

<div class="container-fluid py-6 text-center">
    <h1 class="rt">Réseaux</h1>
    <div class="container py-6">
        <div class="d-flex justify-content-evenly">
            <div>
                <a href="#">
                    <div class="logo-ig"></div>
                </a>
                <p class="mt-3">Instagram</p>
            </div>
            <div>
                <a href="#">
                    <div class="logo-fb"></div>
                </a>
                <p class="mt-3">Facebook</p>
            </div>
            <div>
                <a href="#">
                    <div class="logo-mail"></div>
                </a>
                <p class="mt-3">Mail</p>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>