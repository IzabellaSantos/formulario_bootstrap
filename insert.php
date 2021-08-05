<?php
$data = $pdo->query("SELECT FirstName FROM person")->fetchAll();

// and somewhere later:
foreach ($data as $row) {
    echo $row['FirstName'] . "<br />\n";
}
