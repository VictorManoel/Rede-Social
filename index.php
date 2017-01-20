<!--
     ___                                ___              ___
    /  /\                              /  /\            /__/\
   /  /o/                             /  /oo\           \  \o\
  /  /o/          ___                /  /o/\o\           \  \o\
 /  /o/  ___     /__/\     ___      /  /o/-/oo\      _____\__\o\
/__/o/  /  /\    \  \o\   /  /\    /__/o/ /o/\o\    /__/oooooooo\
\  \o\ /  /o/     \  \o\ /  /o/    \  \o\/o/__\/    \  \o _______\
 \  \o\  /o/       \  \o\  /o/      \  \oo/          \  \o\
  \  \o\/o/         \  \o\/o/        \  \o\           \  \o\
   \  \oo/           \  \oo/          \  \o\           \  \o\
    \__\/             \__\/            \__\/            \__\/
          
-->
<?php
    include 'settings.php';

    if(!isset($_GET['url'])){
        
        if(1==1){ $url = 'home'; }else{ $url = 'login'; }
        
    }else{ $url = $_GET['url']; }
    
    $url = explode('/', $url);

    if(file_exists('pages/'.$url[0].'.php')){
        
        include 'pages/'.$url[0].'.php';
        
    }else{ include 'pages/404.php'; }