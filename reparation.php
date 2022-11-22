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

<!-- Réparation à domicile  -->

<div class="repairdom container-fluid py-5 text-center">
    <h1 class="rt">REPARATION A DOMICILE</h1>
    <div class="container py-4">
        <div class="repairdom-items d-flex justify-content-start">
            <div class="repairdom-presentation">
                <p class="pt-5">Suite au diagnostique la panne matérielle est évidente, la réparation peut être
                    réalisée :</br></br> Objectif : Aucun déplacement, remplacement de la pièce déféctueuse</p>
            </div>
        </div>
    </div>
</div>

<!-- Réparation en atelier  -->

<div class="repairatel container-fluid py-5 text-center">
    <h1 class="rt">REPARATION EN ATELIER</h1>
    <div class="repairatel-txt d-flex flex-column py-4">
        <div class="repairatel-presentation">
            <p class="pt-5">La panne matérielle est complexe a détecter ou nécessite des outils particuliers, un
                envoi en atelier est prévu</br></br>Objectif : Aucun déplacement, liason avec l'atelier,
                remplacement de la pièce déféctueuse</p>
        </div>
        <div class="repairatel-frais d-flex">
            <div class="d-flex">
                <img src="img/components/repair/facture.png" alt="Logo" class="logo-facture">
                <p class="txt-facture">Des frais de devis peuvent-être appliqués dans le cadre d'une
                    réparation en atelier</p>
            </div>
        </div>
    </div>
</div>

<!-- Réparation écran iPhone -->

<div class="repairscreen container-fluid py-5 text-center">
    <h1 class="rt">REPARATION ECRAN IPHONE</h1>
    <div class="container py-4">
        <div class="repairscreen-items d-flex justify-content-evenly">
            <div class="repairscreen-presentation">
                <p class="pt-5">Remplacement tout modèle d'écran Apple à moindre coût</br></br>Objectif : Changer l'écran de son téléphone sans dépenser un SMIC !</p>
            </div>
            <img src="img/components/repair/iphone-broken.png" alt="Réparation écran iPhone" width="200" height="200">
        </div>
    </div>
</div>

<!-- Bouton devis  -->

<div class="container-fluid py-6 text-center">
    <a class="btn btn-depan-devis my-2 py-4" href="devis.php" role="button">DEMANDER UN DEVIS</a>
</div>

<?php
include 'footer.php';
?>