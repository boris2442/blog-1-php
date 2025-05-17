<?php
function render(string $path, array $variables=[]){
    // [
    //     'var'=>1,
    //     'var2'=>2,
    //     'var3'=>3
       
    // ]
    // $var=1;
    //     $var=2;
    //     $var=3;
    extract($variables);
    ob_start();
    require_once "layouts/".$path."_html.php";
    $pageContent=ob_get_clean();
    require_once "layouts/layout_html.php";
}