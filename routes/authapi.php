<?php
use watrlabs\router\Routing;

global $router; // IMPORTANT: KEEP THIS HERE!

$router->group('/api/v1', function($router) {

    $router->get("/check", function () {
        return ["Status"=>"OKAY", "Message"=>"Online"];
    });
    
    $router->get("/hi", function () {
        echo "test<br>";
    });
    
});