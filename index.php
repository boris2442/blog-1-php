<?php
require_once 'libraries/database.php';
require_once 'libraries/utils.php';
$pdo=getPdo();


require 'vendor/autoload.php';

use JasonGrimes\Paginator;

$itemsPerPage = 5; //nbre article par page
$currentPage = $_GET['page'] ?? 1; //page actuelle

$totalQuery = $pdo->query("SELECT COUNT(*) FROM articles");
$totalItems = $totalQuery->fetchColumn(); //recupere le nombre Total  d articles 
$offset = ($currentPage - 1) * $itemsPerPage;


//recuperation des articles dans la datyabase...
$sql = "SELECT * FROM articles ORDER BY created_at
 DESC
 LIMIT :limit OFFSET :offset
  ";
$query = $pdo->prepare($sql);
$query->bindParam(':limit', $itemsPerPage, PDO::PARAM_INT);
$query->bindParam(':offset', $offset, PDO::PARAM_INT);
$query->execute();
$articles = $query->fetchAll(PDO::FETCH_ASSOC);
$paginator = new Paginator(
    $totalItems,
    $itemsPerPage,
    $currentPage,

    '?page=(:num)'

);



// 1--On affiche le titre autre

$pageTitle = 'Accueil du Blog';

// $path="index";
render('articles/index',[
 
  'pageTitle'=>$pageTitle,
  'articles'=>$articles,
  'paginator'=>$paginator

]);
