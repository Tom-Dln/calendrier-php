<?php

/* ----------------------------------------

    Variables Initiales

---------------------------------------- */

$days = [
    'Liste des Jours',
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi',
    'Dimanche',
];

$months = [
    'Liste des Mois',
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre',
];

$show = [
    // Tableau de 7 x 6
];

$dateActual = [
    # Jour Actuel (Type 1 à 31)
    '',
    # Mois Actuel (Type 01 à 12)
    '',
    # Mois Actuel (Type mars)
    '',
    # Année Actuel (Type 20XX)
    '',
    # Nombre de jours dans le mois
    '',
    # Nombre du jours en génération
    1,
];

$dateAround = [
    # Mois Précédant : Mois + Année + Nb Jours
    '',
    '',
    '',
    # Mois Suivant : Mois + Année + Nb Jours
    '',
    '',
    '',
    # Jours restant Précédants et Suivants
    '',
    '',
];


$dateOffset = 0;

$change =  [
    # Mois + Année
    '',
    '',
    # Mois + Année
    '',
    '',
    # Chemins URL + Chemins URL
    '',
    '',
];


// Initialisation Locale

setlocale(LC_TIME, "fr_FR");


/* ----------------------------------------

    Récupération des Données

---------------------------------------- */

if (isset($_GET["month"])) {
    $dateActual[1] = $_GET["month"];
    $dateActual[2] = $months[$dateActual[1]];
    $dateActual[3] = $_GET["year"];
} else {
    $dateActual[0] = strftime("%e");
    $dateActual[1] = strftime("%m");
    $dateActual[2] = strftime("%B");
    $dateActual[3] = strftime("%G");
};


/* ----------------------------------------

    Traitement des Données

---------------------------------------- */

$dateActual[4] = cal_days_in_month(CAL_GREGORIAN, $dateActual[1], $dateActual[3]);

# Jour de la semaine de 1 à 7
$dateInit = strftime("%u", mktime(0, 0, 0, /*Mois*/ $dateActual[1], /*Jour*/ 1, /*Année*/ $dateActual[3]));



$dateAround[0] = $dateActual[1] - 1;
$dateAround[1] = $dateActual[3];

$dateAround[3] = $dateActual[1] + 1;
$dateAround[4] = $dateActual[3];

if ($dateAround[0] == 0) {
    $dateAround[0] = 12;
    $dateAround[1] = $dateAround[1] - 1;
}

if ($dateAround[3] == 13) {
    $dateAround[3] = 1;
    $dateAround[4] = $dateAround[1] + 1;
}

$dateAround[2] = cal_days_in_month(CAL_GREGORIAN, $dateAround[0], $dateAround[1]);
$dateAround[5] = cal_days_in_month(CAL_GREGORIAN, $dateAround[3], $dateAround[4]);

$dateAround[6] = $dateActual[4] - $dateInit + 2;
$dateAround[7] = 1;

for ($j = 0; $j <= 41; $j++) {
    if ($j < $dateInit - 1) {
        $show[$j] = $dateAround[6];
        $dateAround[6]++;
    } elseif ($j > $dateActual[4] + $dateInit - 2) {
        $show[$j] = $dateAround[7];
        $dateAround[7]++;
    } else {
        $show[$j] = $dateActual[5];
        $dateActual[5]++;
    }
}

$dateAround[8] = $dateInit;

/* ----------------------------------------

    Génération des Flèches

---------------------------------------- */

$change[0] = $dateActual[1] - 1;
$change[1] = $dateActual[3];

$change[2] = $dateActual[1] + 1;
$change[3] = $dateActual[3];

if ($change[0] == 0) {
    $change[0] = 12;
    $change[1] = $change[1] - 1;
}

if ($change[2] == 13) {
    $change[2] = 1;
    $change[3] = $change[3] + 1;
}

$change[4] = "http://td-08.test/Rendu/?month=$change[0]&year=$change[1]";
$change[5] = "http://td-08.test/Rendu/?month=$change[2]&year=$change[3]";


// $change[5] = __DIR__ . "/?month=$change[2]&year=$change[3]";


// Timestamp premier jour du mois
// mktime(0, 0, 0, /*Mois*/ strftime("%m"), /*Jour*/ 1, /*Année*/ strftime("%G"));