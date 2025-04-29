<?php
// 1-Démarre une nouvelle session ou reprend une session existante
session_start();

// 2Inclut le fichier de connexion à la base de données
require_once 'database/database.php';

if (isset($_GET['id'])) {
    var_dump($_GET['id']);
    $id = $_GET['id'];
    $sql = "SELECT*FROM `articles` WHERE id=:id";
    $requete = $pdo->prepare($sql);
    $requete->bindParam(':id', $id);
    $requete->execute();
    $article = $requete->fetch();
    echo "<pre>";
    var_dump($article);
    echo "</pre>";

    //renommer les donnees dans la database

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "UPDATE `articles` SET title=:title,  introduction=:introduction, content=:content WHERE id=:id";
        $requete = $pdo->prepare($sql);
        $requete->bindValue(':title', $_POST['title']);
      
        $requete->bindValue(':introduction', $_POST['introduction']);
        $requete->bindValue(':content', $_POST['content']);
        $requete->bindValue(':id', $id);
        $requete->execute();
        header('Location: admin.php');
        exit();
    }else{
        echo "error 1";
    }
}else{
    echo "error2";
}


//Définit le titre de la page
$pageTitle = "Éditer un article";

// 4-Démarre la mise en tampon de sortie pour capturer le contenu HTML
ob_start();

// 5Inclut le fichier HTML pour éditer un article
require 'layouts/admin_dashboarddddddddddddddddd/admin_dashboarddddddddddddddddd_edit_html.php';

// 6Récupère le contenu mis en tampon et le stocke dans la variable $pageContent
$pageContent = ob_get_clean();

// 7Inclut le modèle de mise en page HTML qui affichera le contenu de la page
require 'layouts/layout_html.php';
