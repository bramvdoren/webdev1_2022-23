<?php

include '../../includes/db.php';
include '../../model/Flight.php';

$flight = new Flight();
$flights = $flight->getAll();

foreach($flights as $flight) : ?>
    <li>
        <a href="/admin/flights/edit.php?flight_id=<?= $flight['flight_id'] ?>">
            <?= $flight['from'] . ' -> ' . $flight['to'] ; //TODO sql aanpassen zodat de naam van de from en to kan opgehaald worden ?>
        </a>
    </li>
<?php endforeach;