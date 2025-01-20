<?php

if(!isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste uneli vas email");
}
if(!isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die("Niste uneli vasu lozinku!");
}

$email = $_POST['email'];
$sifra = $_POST['sifra'];

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

if($rezultat->num_rows >= 1)
{
    $korisnik = $rezultat->fetch_assoc();
    $proveraSifre = password_verify($sifra, $korisnik['sifra']);
    
    if($proveraSifre == true)
    {
        echo"Dobrodosli!";
    }
    else
    {
        echo"Pogresna sifra!";
    }
}

else
{
    echo"Nepostoji korisnik sa ovom email adresom.";
}