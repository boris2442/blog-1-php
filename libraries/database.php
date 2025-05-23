<?php
// function getPdo():PDO
// {
//     define('DBNAME', 'blogphp-2025.sql');
//     define('DBHOST', 'localhost');
//     define('DBUSER', 'root');
//     define('DBPASS', '');
//     $dsn = "mysql:dbname=" . DBNAME . "; host=" . DBHOST;
//     try {

//         $pdo = new PDO($dsn, DBUSER, DBPASS);
//         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
//         $pdo->exec("SET NAMES utf8");
//         echo "<div style='background-color:#3c763d; color:white;'>connexion à la database reussie</div>";
//     } catch (PDOException $e) {
//         die("Erreur:" . $e->getMessage());
//     }
//     return $pdo;
// }

/**
 * REtourne une connexion a la database
 */
function getPdo(){
    $pdo= new PDO('mysql:host=localhost; dbname=blogphp-2025.sql; charset=utf8', 'root', '',[
         PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, //quand il ya une erreur  je veux que tu affiches
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC //on doit exploiter les donees sous forme de tableau associatif
    ]);
    return $pdo;
}