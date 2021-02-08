<?php

include 'includes/functions.php';

class FetchRecords extends Database
{
    /**
     * Fetch all patients from database
     *
     * @return string
     */
    public function getPatients(): string
    {
        $sql = "SELECT * FROM patients ORDER BY nom";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $patients = $stmt->fetchAll();

        $output = '';

        foreach ($patients as $patient) {
            $debut = getDayMonthYear($patient["date_deb"]);
            $fin = getDayMonthYear($patient["date_fin"]);
            $heureDebut = getTime($patient["date_deb"]);
            $heureFin = getTime($patient["date_fin"]);

            $presence = compareDate($patient["date_deb"], $patient["date_fin"]);

            $output .= '
                <tr>
                    <td>' . $patient["nom"] . '</td>
                    <td>' . $patient["prenom"] . '</td>
                    <td>' . $patient["ville"] . '</td>
                    <td><span class="tooltipster" title="' . $heureDebut . '">' . $debut . '</span></td>
                    <td><span class="tooltipster" title="' . $heureFin . '">' . $fin . '</span></td>
                    <td>' . $presence . '</td>
                </tr>';
        }
        return $output;
    }
}