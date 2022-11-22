<?php
include 'header.php';
?>

<!-- Diagnostique / Devis  -->

<div class="bg-diag container-fluid py-6 text-center">
    <h1 class="rt mb-5">DIAGNOSTIQUE / DEVIS</h1>
    <div class="diagdevis mx-auto py-3">
        <div class="container py-2">
            <div class="d-flex justify-content-around">
                <div>
                    <div class="logo-form mx-auto"></div>
                    <p class="rl mt-3">Description </br>de la panne</p>
                    <p class="diaginfo">Avec des photos </br> c'est encore mieux !</p>
                </div>
                <div>
                    <div class="logo-chrono mx-auto"></div>
                    <p class="rl mt-4">Réponse sous 24H</p>
                </div>
                <div>
                    <div class="logo-soluce mx-auto"></div>
                    <p class="rl mt-4">Solutions</p>
                    <p class="diaginfo mt-5">A distance / A domicile</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pack Clean  -->

<div class="packclean container-fluid py-5 text-center">
    <h1 class="rt">PACK CLEAN</h1>
    <div class="container py-4">
        <div class="packclean-items d-flex justify-content-evenly">
            <img src="img/components/depan/packclean-depan.png" alt="Pack Clean">
            <div class="packclean-presentation">
                <p class="pt-5">Donner une seconde vie à votre appareil (Sauvegarde, Nettoyage, Réinitialisation)
                    : </br></br> - Sauvegarde de vos données</br> - Réinitialisation de votre ordinateur</br> -
                    Installation de Windows (avec antivirus gratuit, logiciels de nettoyage et de maintenance)</br>
                    - Installation de votre navigateur préféré</p>
            </div>
        </div>
    </div>
    <div class="info-offre d-flex justify-content-end me-5"><a href="#">Plus d'information sur l'offre ici</a></div>
</div>

<!-- Pack Smartphone  -->

<div class="packsmartphone container-fluid py-5 text-center">
    <h1 class="rt">PACK SMARTPHONE</h1>
    <div class="container py-4">
        <div class="packsmartphone-items d-flex justify-content-start">
            <div class="packsmartphone-presentation">
                <p class="pt-5">Transfert de données de votre ancien appareil vers le nouveau aini que son installation :</br></br> - Sauvegarde de vos données</br> - Réinitialisation de l'ancien appareil</br> -
                    Installation de votre nouveau Smartphone</p>
            </div>
        </div>
    </div>
    <div class="info-offre-purple d-flex justify-content-start ms-5"><a href="#">Plus d'information sur l'offre ici</a></div>
</div>

<!-- Bouton devis  -->

<div class="container-fluid py-6 text-center">
    <a class="btn btn-depan-devis my-2 py-4" href="devis.php" role="button">DEMANDER UN DEVIS</a>
</div>

<?php
include 'footer.php';
?>