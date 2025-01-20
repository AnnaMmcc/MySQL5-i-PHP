<?php

if(!isset($_GET['ime']) || empty($_GET['ime']))
{
    echo"Unesite ime proizvoda!";
}
if(!isset($_GET['opis']) || empty($_GET['opis']))
{
    echo"Unesite opis proizvoda!";
}
if(!isset($_GET['cena']) || empty($_GET['cena']))
{
    echo"Unesite cenu proizvoda!";
}
if(!isset($_GET['slika']) || empty($_GET['slika']))
{
    echo"Unesite sliku proizvoda!";
}
if(!isset($_GET['kolicina']) || empty($_GET['kolicina']))
{
    echo"Unesite kolicinu proizvoda!";
}
require_once "baza.php";
$ime = $_GET['ime'];
$opis = $_GET['opis'];
$cena = $_GET['cena'];
$slika = $_GET['slika'];
$kolicina = $_GET['kolicina'];





$rezultat = $baza->query("INSERT INTO proizvodi (ime,opis,cena,slika,kolicina) VALUES ('$ime','$opis',$cena,'$slika',$kolicina)");
echo"Uspesno ste kreirali proizvod!";