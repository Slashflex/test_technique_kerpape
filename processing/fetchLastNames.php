<?php
require_once '../includes/functions.php';

$text = htmlspecialchars($_POST['lastname']);

$stmt = dbConnect()->prepare(
    "SELECT t1.*
            FROM test_technique.patients as t1
            INNER JOIN
                (SELECT id_patient, MAX(date_deb) as maxDate
                    FROM test_technique.patients
                    GROUP BY id_patient) AS t2
            ON t1.id_patient = t2.id_patient
            AND t1.date_deb = t2.maxDate
            WHERE nom LIKE CONCAT('%', :lastname, '%') 
            ORDER BY nom ASC"
);

$stmt->execute(['lastname' => $text]);
$patients = $stmt->fetchAll();

renderResults($patients, 'nom', $stmt);
