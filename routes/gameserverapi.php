<?php
use watrlabs\router\Routing;
use rbx\security;

function checkhelp() {
    echo "hi";
}

global $router; // IMPORTANT: KEEP THIS HERE!

$router->get("/Game/Host.ashx", function() {
    
    $security = new security();
    $lua = file_get_contents("../storage/private/lua/gameserver.lua");

    header("Content-type: text/lua");
    echo $security->signScriptAlt($lua, 0);

});

$router->get("/Game/Join.ashx", function() {
    
    $security = new security();
    $lua = file_get_contents("../storage/private/lua/joinscript.lua");

    header("Content-type: text/lua");

    if(isset($_GET["ID"]) && isset($_GET["username"]) && isset($_GET["ip"])){
        $id = (int)$_GET["ID"];
        $username = $_GET["username"];
        $ip = $_GET["ip"];

        $lua = str_replace("%userid%", $id, $lua);
        $lua = str_replace("%username%", $username, $lua);
        $lua = str_replace("%ip%", $ip, $lua);
        
        echo $security->signScript($lua);
    }
});

$router->get('/CharacterFetch.ashx', function(){

    if(isset($_GET["userId"])){
        $userId = $_GET["userId"];

        $charapp = file_get_contents("https://watrbx.wtf/CharacterFetch.aspx?Id=$userId&placeId=1");

        if($charapp){
            $charapp = str_replace("watrbx.wtf", "robloc.icu", $charapp);
            die($charapp);
        }
    }

});

$router->get('/Asset/BodyColors.ashx', function(){

    if(isset($_GET["Id"])){
        $id = $_GET["Id"];

        $charapp = file_get_contents("https://watrbx.wtf/Asset/BodyColors.ashx?Id=$id");

        if($charapp){
            $charapp = str_replace("watrbx.wtf", "robloc.icu", $charapp);
            die($charapp);
        }
    }

});
