<?php
//ici, nous resumon notre code
//1. nouvelle connexion a la fa-database

$db=new PDO('mysql:host=localhost; dbname=nom_database; charset=utf8', 'root', '',[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, //quand il ya une erreur  je veux que tu affiches
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC //on doit exploiter les donees sous forme de tableau associatif
]);

//Affichage tampon
$pageTitle="Affichage des pages";
ob_start(); //ne m'affiche pas encore
require("templates/articles/index_html.php");
$pageCotent=ob_get_clean();//tout ce qui est garder affiche le dans la variable tampon
require("templates/layout_html.php"); //affiche la structure html avec une variable $pageContent deja affiche grace a <?= ?>
