<?php

require '../vendor/autoload.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new \Slim\App($config);


/**
    Defines the homw page for the stories project 
*/
$app->get('/', function ($request, $response, $args) {
   
    require ('configs/config.inc.php') ;
    
    // THE HOME PAGE !
    $title = "Welcome to Stories !";
    
    require('partials/header.inc.php');       
    require('pages/home.php');      
    require ('partials/footer.inc.php');
    
});

$app->get('/sign-in', function ($request, $response, $args) {
   
    require ('configs/config.inc.php') ;
    
    // THE HOME PAGE !
    $title = "Welcome to Stories !";
    
    require('partials/header.inc.php');       
    require('pages/sign-in.php');      
    require ('partials/footer.inc.php');
    
});

$app->get('/sign-up', function ($request, $response, $args) {
   
    require ('configs/config.inc.php') ;
    
    // THE HOME PAGE !
    $title = "Sign into stories";
    
    require('partials/header.inc.php');       
    require('pages/sign-up.php');      
    require ('partials/footer.inc.php');
    
});

$app->get('/share-mine', function ($request, $response, $args) {
   
    require ('configs/config.inc.php') ;
    
    // THE HOME PAGE !
    $title = "Share your story";
    
    require('partials/header.inc.php');       
    require('pages/share-mine.php');      
    require ('partials/footer.inc.php');
    
});

// APIs

$app->get('/auth/sign-in/{email}/{pass}', function ($request, $response, $args) {
   
    require ('configs/config.inc.php') ;  
    echo json_encode($args);
    
});

$app->run();

