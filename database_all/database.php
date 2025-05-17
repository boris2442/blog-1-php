<?php
define('DBNAME', 'blogphp-2025.sql');
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
$dsn="mysql:dbname=".DBNAME."; host=".DBHOST;
try{

    $pdo=new PDO($dsn, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->exec("SET NAMES utf8");
    echo "<div style='background-color:#3c763d; color:white;'>connexion à la database reussie</div>";
}catch(PDOException $e){
    die("Erreur:".$e->getMessage());
}
?>