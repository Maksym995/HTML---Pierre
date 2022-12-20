<?php

if(isset($_GET['p'])){
    
    switch($_GET['p']){
        case 'pro':
            include 'pages/programme.php';
            break;
        case 'stu':
            include 'pages/studio.php';
            break;
        case 'ecol':
            include "pages/ecoles.php";
                break;
        case 'opn':
            include 'pages/openhuis.php';
                break;
        case 'apro':
            include 'pages/proposbronks.php';
                break;
        case 'visi':
            include 'pages/visite.php';
                break;
        default:
            include_once 'homepage.php';
    }
  
}else{
    include_once "homepage.php";
}
