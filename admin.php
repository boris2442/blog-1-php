<?php
session_start();

require_once 'database/database.php';

// Récupère les articles existants
$sql = "SELECT * FROM `articles`";
$query = $pdo->prepare($sql);
$query->execute();
$articles = $query->fetchAll();

// Insertion dans la base de données
if (!empty($_POST)) {
    $errors = [];
    $title = $introduction = $content = '';

    // Validation du titre
    if (empty($_POST['title'])) {
        $errors['title'] = "Le titre de l'article est obligatoire";
    } elseif (strlen($_POST['title']) > 50) {
        $errors['title'] = 'Le titre ne doit pas dépasser 50 caractères';
    } else {
        $title = htmlspecialchars($_POST['title']);
    }

    // Validation de l'introduction
    if (empty($_POST['introduction'])) {
        $errors['introduction'] = 'L\'introduction est obligatoire';
    } elseif (strlen($_POST['introduction']) > 255) { // Augmenté à 255 caractères
        $errors['introduction'] = 'L\'introduction est trop longue';
    } else {
        $introduction = htmlspecialchars($_POST['introduction']);
    }

    // Validation du contenu
    if (empty($_POST['content'])) {
        $errors['content'] = 'Le contenu est obligatoire';
    } elseif (strlen($_POST['content']) > 5000) { // Augmenté à 5000 caractères
        $errors['content'] = 'Le contenu est trop long';
    } else {
        $content = htmlspecialchars($_POST['content']);
    }

    // Si aucune erreur, insère dans la base de données
    if (empty($errors)) {
        try {
            $sql = "INSERT INTO `articles` (`title`, `introduction`, `content`) VALUES (:title, :introduction, :content)";
            $query = $pdo->prepare($sql);
            $query->bindValue(':title', $title);
            $query->bindValue(':introduction', $introduction);
            $query->bindValue(':content', $content);
            $query->execute();

            // Redirection après insertion
            header('Location: admin.php');
            exit();
        } catch (PDOException $e) {
            $errors['database'] = "Erreur lors de l'insertion : " . $e->getMessage();
        }
    }
}

// Définit le titre de la page
$pageTitle = "Page Dashboard";

// Démarre la mise en tampon de sortie
ob_start();

// Inclut le layout de la page
require_once 'layouts/admin_dashboarddddddddddddddddd/admin_dashboarddddddddddddddddd_html.php';

// Récupère le contenu mis en tampon
$pageContent = ob_get_clean();

// Inclut le layout principal
require_once 'layouts/layout_html.php';