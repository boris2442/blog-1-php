<?php
require_once 'libraries/database.php';
require_once 'librairies/utils.php';
$pdo=getPdo();




// $pageTitle ='page users'; 
 
// ob_start();

// require_once 'layouts/users_dddddddddddddddd/usersddddddddddddddddd_html.php';

// $pageContent = ob_get_clean();

// require_once 'layouts/layout_html.php';


// $pageTitle = 'page users';

// $path="index";
render('users_dddddddddddddddd/usersddddddddddddddddd',[
 
  'pageTitle'=>$pageTitle,
//   'articles'=>$articles,
//   'paginator'=>$paginator

]);
