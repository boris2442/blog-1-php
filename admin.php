<?php
session_start();

require_once 'database/database.php';
$sql="SELECT* FROM  `articles`";
$query=$pdo->prepare($sql);
$query->execute();
$articles=$query->fetchAll();


// 1-On affiche le titre

$pageTitle = "page dashbord";

// 2-Debut du tampon de la page de sortie

ob_start(); //ce qui veut dire que le navigateur va stocker le contenu de la page dans un tampon

// 3-inclure le layout de la page register
require_once 'layouts/admin_dashboarddddddddddddddddd/admin_dashboarddddddddddddddddd_html.php';

//4-recuperation du contenu du tampon de la page register
$pageContent = ob_get_clean();

//5-Inclure le layout de la page de sortie
require_once 'layouts/layout_html.php';

?>
