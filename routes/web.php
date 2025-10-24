<?php
use watrlabs\router\Routing;
use watrlabs\watrkit\sanitize;

global $router; // IMPORTANT: KEEP THIS HERE!
global $pagebuilder;

$router->get("/", function() {
    //global $pagebuilder;
    //$pagebuilder->setPage("../views/default.php");
    //$pagebuilder->buildpage();

    global $twig;
    echo $twig->render('default.twig');
});

/*
$router->group('/group', function($router) {
    
    $router->get("/hi", function () {
        echo "test<br>";
    });
    
});
*/
