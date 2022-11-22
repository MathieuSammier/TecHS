<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
$colorLogo = '';
$activeLink = '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecHS - Lille - Dépannage informatique</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <?php
    if ($curPageName == 'index.php') {
        echo '<link rel="stylesheet" href="css/style.css">';
    } else if ($curPageName == 'depannage.php') {
        echo '<link rel="stylesheet" href="css/style.css">' . '<link rel="stylesheet" href="css/depannage.css">';
    } else if ($curPageName == 'montage.php') {
        echo '<link rel="stylesheet" href="css/style.css">' . '<link rel="stylesheet" href="css/montage.css">';
    } else if ($curPageName == 'reparation.php') {
        echo '<link rel="stylesheet" href="css/style.css">' . '<link rel="stylesheet" href="css/reparation.css">';
    } else if ($curPageName == 'devis.php') {
        echo '<link rel="stylesheet" href="css/style.css">' . '<link rel="stylesheet" href="css/devis.css">';
    }
    ?>

</head>

<body>

    <!-- Barre de navigation  -->

    <?php
    if (($curPageName == 'index.php') or ($curPageName == 'devis.php')) {
        $colorLogo = '';
        $activeLink1 = '"nav-link  active" aria-current="page"';
        $activeLink2 = '"nav-link"';
        $activeLink3 = '"nav-link"';
        $activeLink4 = '"nav-link"';
    } else if ($curPageName == 'depannage.php') {
        $colorLogo = '-purple';
        $activeLink1 = '"nav-link"';
        $activeLink2 = '"nav-link  active" aria-current="page"';
        $activeLink3 = '"nav-link"';
        $activeLink4 = '"nav-link"';
    } else if ($curPageName == 'montage.php') {
        $colorLogo = '-marine';
        $activeLink1 = '"nav-link"';
        $activeLink2 = '"nav-link"';
        $activeLink3 = '"nav-link"';
        $activeLink4 = '"nav-link  active" aria-current="page"';
    } else if ($curPageName == 'reparation.php') {
        $colorLogo = '-blue';
        $activeLink1 = '"nav-link"';
        $activeLink2 = '"nav-link"';
        $activeLink3 = '"nav-link  active" aria-current="page"';
        $activeLink4 = '"nav-link"';
    } ?>

    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo<?php echo $colorLogo; ?>.png" alt="Logo" width="80" height="80" class="d-inline-block me-2 align-text-center">
                TecHS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class=<?php echo $activeLink1; ?> href="index.php">Accueil</a>
                    <a class=<?php echo $activeLink2; ?> href="depannage.php">Depannage</a>
                    <a class=<?php echo $activeLink3; ?> href="reparation.php">Reparation</a>
                    <a class=<?php echo $activeLink4; ?> href="montage.php">Montage</a>
                    <!-- <a class="nav-link" href="#">Contact</a> -->
                </div>
                <a class="btn btn-index-navdevis" href="devis.php" role="button">Devis gratuit</a>
            </div>
        </div>
    </nav>