<?php
//require_once_DIR_ . 'vendor/autoloadphp';
ini_set(allow_url_fopen',1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']){
    case '/';
        require 'index.html';
        break;
    case '/index';
        require 'index.html'
        break;
     case '/login.php';
        require 'login.php'
        break;       
   case '/logout.php';
        require 'logout.php'
        break;   
   case '/signup.php';
        require 'signup.php'
        break;   
   case '/connection.php';
        require 'connection.php'
        break; 
    default;
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path']);
        exit('Not Found');
  }
  
