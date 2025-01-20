<?php

if(!isset($_GET['proizvod']) || empty($_GET['proizvod']))
{
    die("Nije unet proizvod");
}

require_once "baza.php";

$proizvod = $_GET['proizvod'];

$rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$proizvod%' OR opis LIKE '%$proizvod%'");

if($rezultat->num_rows == 0)
{
    die("Nije pronadjen rezultat pretrage");
}

else
{
    echo"Uspesno ste pronasli " . $rezultat->num_rows ." proizvod/a";
}