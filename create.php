<?php
require_once 'database/database.php';

//insertion de l'article dans la base de donnee
if (!empty($_POST)) {
    $errors = [];
    //title
    if (empty($_POST['title'])) {
        $errors['title'] = "Le titre de l'article est obligatoire";
    } elseif (strlen($_POST['title']) > 50) {
        $errors['title'] = 'Le nombre de caracteres n excede pas 50 caracteres';
    } else {
        $title = $_POST['title'];
    }
    //slug
    if (empty($_POST['slug'])) {
        $errors['slug'] = 'slug obligatoire';
    } elseif (strlen($_POST['slug']) > 55) {
        $errors['slug'] = 'slug trop long';
    } else {
        $slug = $_POST['slug'];
    }
    //introduction
    if (empty($_POST['introduction'])) {
        $errors['introduction'] = 'introduction obligatoire';
    } elseif (strlen($_POST['introduction']) > 55) {
        $errors['introduction'] = 'introduction trop long';
    } else {
        $introduction = $_POST['introduction'];
    }
    //content

    if (empty($_POST['content'])) {
        $errors['content'] = 'content obligatoire';
    } elseif (strlen($_POST['content']) > 55) {
        $errors['content'] = 'content trop long';
    } else {
        $content = $_POST['content'];
    }

    if(empty($errors)){
        $sql="INSERT INTO `articles` (`title`,`slug`, `introduction`, `content`) VALUES(?, ?, ?, ?)";
        $query=$pdo->prepare($sql);
        $query->execute([$title, $slug, $introduction, $content]);
        // header('location:index.php');

    }else{
        echo "errreur produite";
    }
}else{
    echo "Une erreur s'est produite";
}



// 1--On affiche le titre autre

$pageTitle = 'creer un article';

// 2-Debut du tampon de la page de sortie

ob_start();

// 3-inclure le layout de la page d' accueil
require_once 'layouts/admin_dashboarddddddddddddddddd/admin_dashboarddddddddddddddddd_html.php';

//4-recuperation du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

//5-Inclure le layout de la page de sortie
require_once 'layouts/layout_html.php';
