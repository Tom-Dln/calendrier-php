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
    // Ligne 1
    '',
    '',
    '',
    '',
    '',
    '',
    '',

    // Ligne 2
    '',
    '',
    '',
    '',
    '',
    '',
    '',

    // Ligne 3
    '',
    '',
    '',
    '',
    '',
    '',
    '',

    // Ligne 4
    '',
    '',
    '',
    '',
    '',
    '',
    '',

    // Ligne 5
    '',
    '',
    '',
    '',
    '',
    '',
    '',

    // Ligne 6
    '',
    '',
    '',
    '',
    '',
    '',
    '',
];

$dateActual = [
    '',
    '',
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
    # Chemins + Chemins
    '',
    '',
];


// Initialisation Locale

setlocale(LC_TIME, "fr_FR");


/* ----------------------------------------

    Récupération des Données

---------------------------------------- */


if (isset($_GET["month"])) {
    # Mois (Type 01 à 12)
    $dateActual[1] = $_GET["month"];

    # Mois (Type mars)
    $dateActual[2] = $months[$dateActual[1]];

    # Année (Type 20XX)
    $dateActual[3] = $_GET["year"];
} else {
    # Jour (Type 1 à 31)
    $dateActual[0] = strftime("%e");

    # Mois (Type 01 à 12)
    $dateActual[1] = strftime("%m");

    # Mois (Type mars)
    $dateActual[2] = strftime("%B");

    # Année (Type 20XX)
    $dateActual[3] = strftime("%G");
};


/* ----------------------------------------

    Traitement des Données

---------------------------------------- */

# Nombre de jours dans le mois

$dateActual[4] = cal_days_in_month(CAL_GREGORIAN, $dateActual[1], $dateActual[3]);

# Jour de la semaine de 1 à 7
$dateInit = strftime("%u", mktime(0, 0, 0, /*Mois*/ $dateActual[1], /*Jour*/ 1, /*Année*/ $dateActual[3]));

for ($i = $dateInit - 1; $i < $dateActual[4] - 1 + $dateInit; $i++) {
    $show[$i] = $i - $dateInit + 2;
}

/* ----------------------------------------

    Génération des Flèches

---------------------------------------- */

$change[0] = $dateActual[1] - 1;
$change[1] = $dateActual[3];

$change[2] = $dateActual[1] + 1;
$change[3] = $dateActual[3];

if ( $change[0] == 0) {
    $change[0] = 12;
    $change[1] = $change[1] - 1;
}

if ( $change[2] == 13) {
    $change[2] = 1;
    $change[3] = $change[3] + 1;
}

$change[4] = "http://td-08.test/Rendu/?month=$change[0]&year=$change[1]";
$change[5] = "http://td-08.test/Rendu/?month=$change[2]&year=$change[3]";


// $change[5] = __DIR__ . "/?month=$change[2]&year=$change[3]";


// Timestamp premier jour du mois
// mktime(0, 0, 0, /*Mois*/ strftime("%m"), /*Jour*/ 1, /*Année*/ strftime("%G"));