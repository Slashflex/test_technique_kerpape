<?php

/**
 * @param $string
 * @return string
 */
function getDayMonthYear($string): string
{
    $date = strtotime($string);
    $year = date("Y", $date);
    $month = date("m", $date);
    $day = date("d", $date);

    return $day . '-' . $month . '-' . $year;
}

/**
 * @param $string
 * @return string
 */
function getTime($string): string
{
    $time = strtotime($string);
    $hours = date("h", $time);
    $minutes = date("i", $time);

    return $hours . ':' . $minutes;
}

/**
 * @param $dateDebut
 * @param $dateFin
 * @return string
 */
function compareDate($dateDebut, $dateFin): string
{
    // Get current date and time
    $actualDate = date("Y-m-d H:i:m");

    return $dateFin >= $actualDate ? '<i class="fas fa-check"></i>' : '<i class="fas fa-times"></i>';
}

/**
 * @return PDO
 */
function dbConnect(): PDO
{
    // TODO Renseigner votre nom d'utilisateur et mot de passe utilisateur MySQL 1/2
    $db = new PDO("mysql:host=localhost;dbname=test_technique", "NomUtilisateurMySQLAChanger", "MotDePasseAChanger.");
    //
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 * @param $patients
 * @param $className
 * @param $stmt
 */
function renderResults($patients, $className, $stmt)
{
    $output = '';
    if ($stmt->rowCount() > 0) {
        $output .= '<table class="table table-hover filtered-table container ' . $className . '">
                <thead class="table-dark">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Ville</th>
                        <th>Arrivée</th>
                        <th>Départ</th>
                        <th>Présent</th>
                    </tr>
                </thead>
                <tbody>';

        foreach ($patients as $patient) {
            $presence = compareDate($patient["date_deb"], $patient["date_fin"]);
            $heureDebut = getTime($patient["date_deb"]);
            $heureFin = getTime($patient["date_fin"]);

            $output .= '<tr>
                    <td>' . $patient["nom"] . '</td>
                    <td>' . $patient["prenom"] . '</td>
                    <td>' . $patient["ville"] . '</td>
                    <td><span class="tooltipster" title="' . $heureDebut . '">' . getDayMonthYear($patient["date_deb"]) . '</span></td>
                    <td><span class="tooltipster" title="' . $heureFin . '">' . getDayMonthYear($patient["date_fin"]) . '</span></td>
                    <td>' . $presence . '</td>
                </tr>
            </tbody>';
        }
        echo $output;
    } else {
        echo '<p class="btn-danger text-center w-25 mx-auto py-2 rounded">No record(s) found</p>';
    }
}
