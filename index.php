<?php require_once __DIR__ . '/bdd.php'; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendrier Php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="text-center text-white pt-5 pb-4">
        <h1><a href="http://td-08.test/Rendu/">Calendrier PHP</a></h1>
        <p>Un Calendrier élégant développé avec PHP</p>
    </header>
    <main class="container py-4">
        <div>
            <div class="col-12 mb-4">
                <div class="grid-title text-center text-white">
                    <div class="date-actual">
                        <h2><?= ucwords($dateActual[2]) . ' ' . $dateActual[3] ?></h2>
                    </div>
                    <div class="date-decrease d-flex align-items-center justify-content-center">
                        <a href="<?= $change[4]; ?>">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="date-increase d-flex align-items-center justify-content-center">
                        <a href="<?= $change[5]; ?>">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="grid-calender text-center text-white">
                    <?php 
                    for ($e = 1; $e <= 7;$e++) {
                        echo "<div class='" . strtolower($days[$e]) . " pb-4 px-1 text-truncate'>$days[$e]</div>";
                    }
                    ?>
                    <?php
                    for ($a = 0; $a <= 41; $a++) {
                        # Boucle Création des cases de jours
                        if (($show[$a] == strftime("%e")) && ($dateActual[1] == strftime("%m")) && ($dateActual[3] == strftime("%G"))) {
                            echo "<div class='case-$a'><p class='d-inline py-2 px-3 today color-blue'>$show[$a]</p></div>";
                        } else {
                            echo "<div class='case-$a'>$show[$a]</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="container mt-5">
        <form action="" method="GET" class="mx-auto">
            <div class="row">
                <div class="col-0 col-md-2"></div>
                <div class="col-6 col-md-3 mb-4">
                    <select class="form-control" id="month" name="month">
                        <?php
                        for ($b = 1; $b <= 12; $b++) {
                            if ($dateActual[1] == $b) {
                                echo "<option value='$b' selected>$months[$b]</option>";
                            } else {
                                echo "<option value='$b'>$months[$b]</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <select class="form-control" id="year" name="year">
                        <?php
                        for ($d = strftime("%G") + 100; $d >= strftime("%G") - 100; $d--) {
                            if ($d == $dateActual[3]) {
                                echo "<option value='$d' selected>$d</option>";
                            } else {
                                echo "<option value='$d'>$d</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-12 col-md-2">
                    <button type="submit" class="btn btn-light d-block mx-auto">Valider</button>
                </div>
                <div class="col-0 col-md-2"></div>
            </div>
        </form>
    </footer>
    <script src="https://kit.fontawesome.com/4cfbd32d63.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>