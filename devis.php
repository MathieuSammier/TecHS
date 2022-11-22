<?php
include 'header.php';
?>

<!-- Etapes devis  -->

<div class="bg-presentation container-fluid py-6">
    <div class="d-flex justify-content-center">
        <div class="etapes-devis d-flex flex-column py-4">
            <h2 class="greentec">ETAPES</h2>
            <div class="d-flex justify-content-around">
                <div class="etapesdev-txt">
                    <div class="logo-form-devis mx-auto"></div>
                    <p class="rl mt-4">Remplir le formulaire ci-dessous</p>
                </div>
                <div class="etapesdev-txt">
                    <div class="logo-mail-devis mx-auto"></div>
                    <p class="rl mt-4">Attendre la réponse par mail (24h maximum)</p>
                </div>
                <div class="etapesdev-txt">
                    <div class="logo-valid mx-auto"></div>
                    <p class="rl mt-4">Validation de l'intervention</p>
                </div>
            </div>
        </div>
    </div>
    <div class="devis-frais mx-auto mt-5">
        <div class="d-flex justify-content-center">
            <img src="img/components/devis/facture.png" alt="Logo" class="logo-facture">
            <p class="txt-devis-facture">Des frais de devis peuvent-être appliqués dans le cadre d'une
                réparation en atelier</p>
        </div>
    </div>
</div>

<!-- Formulaire -->

<div class="container-fluid py-5 text-center">
    <h1 class="rt">FORMULAIRE</h1>
    <form class="needs-validation" novalidate>
        <div class="container py-4">
            <p>Votre demande concerne :</p>
            <div class="all-devisform-demande">
                <div class="devis-depan"><img src="img/components/devis/page-devis-icone-form-depannage.png" alt="Logo">
                    <p>Un dépannage</p>
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                </div>
                <div class="devis-repair"><img src="img/components/devis/page-devis-icone-form-repair.png" alt="Logo">
                    <p>Une réparation</p>
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                </div>
                <div class="devis-montage"><img src="img/components/devis/page-devis-icone-form-montage.png" alt="Logo">
                    <p>Un montage</p>
                    <div>
                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                    </div>
                </div>
            </div>
            <div class="all-devisform-info">
                <div class="devisform-info-g">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Nom(s) et Prénom(s)" required>
                        <label for="floatingInput">Nom(s) et Prénom(s)</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="nom@exemple.com" required>
                        <label for="floatingInput">Adresse e-mail</label>
                    </div>
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Numéro de téléphone">
                        <label for="floatingInput">Numéro de téléphone</label>
                    </div>
                </div>
                <div class="devisform-info-d">
                    <div class="form-floating">
                        <textarea class="form-control devis-commentaire" placeholder="Laisser un commentaire ici" id="floatingTextarea2" required></textarea>
                        <label for="floatingTextarea2">Votre demande</label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="formFileMultiple" class="form-label">Veuillez insérer des photos pour illustrer votre
                    problème</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</div>

<!-- Footer  -->

<footer>
    <div class="container-fluid py-3 text-center">
        <div class="conatiner d-flex justify-content-around">
            <a href="index.php">
                <div class="logo-white"></div>
                <p>TecHS</p>
            </a>
            <div class="d-flex flex-column">
                <p>Navigation</p>
                <a href="depannage.php">Dépannage</a>
                <a href="reparation.php">Réparation</a>
                <a href="montage.php">Montage</a>
                <!-- <a href="#">Contact</a> -->
                <a href="devis.php">Devis</a>
            </div>
            <div class="localisation d-flex flex-column">
                <p>Localisation </br> Métropole Lilloise :</p>
                <div class="localisation-logo"></div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->

<script>
    /*La fonction principale de ce script est d'empêcher l'envoi du formulaire si un champ a été mal rempli
     *et d'appliquer les styles de validation aux différents éléments de formulaire*/
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            let forms = document.getElementsByClassName('needs-validation');
            let validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>