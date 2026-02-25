<?php
$personne = [
    "nom" => "Ali",
    "age" => 30,
    "prix" => 49.99,
    "statut" => true
];

var_dump($personne);

echo "<br>";

var_dump(is_string($personne["nom"]));
var_dump(is_int($personne["age"]));
var_dump(is_float($personne["prix"]));
var_dump(is_bool($personne["statut"]));
?>