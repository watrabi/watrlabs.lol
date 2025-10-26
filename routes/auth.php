<?php
use watrlabs\router\Routing;
use watrlabs\authentication;

global $router; // IMPORTANT: KEEP THIS HERE!



$router->group('/auth', function($router) {
    
    $router->get("/login", function () {
        global $twig;
        echo $twig->render('auth/login.twig');
    });

    $router->get("/sign-up", function () {
        global $twig;
        echo $twig->render('auth/signup.twig');
    });
    
});