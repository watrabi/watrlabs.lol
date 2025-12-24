<?php
use watrlabs\router\Routing;
use rbx\security;


global $router; // IMPORTANT: KEEP THIS HERE!

$router->get('/asset/GetScriptState.ashx', function(){
    die("0 0 0 0");
    //die("0 0 0 00 0 0 0");
});

$router->get('/GetScriptState.ashx', function(){
    die("0 0 0 0");
});

$router->get("/studio.ashx", function(){

    header("Content-type: text/lua");
    $security = new security();

    $asset = file_get_contents("../storage/private/lua/studio.lua") . "\n"; 

    echo $security->signScript($asset);
    die();
});

$router->get("/asset/", function() {

    $security = new security();
    
    
    if(isset($_GET["id"])){
        $id = (int)$_GET["id"];
    } elseif(isset($_GET["ID"])){
        $id = (int)$_GET["id"];
    } else {
        $id = 0;
    }

    if($id <= 30){
        header("Content-type: text/lua");

        $asset = "\n" . file_get_contents("../storage/private/lua/corescripts/" . $id);

        $asset = str_replace("watrbx.wtf", $_ENV["APP_DOMAIN"], $asset);
        $asset = str_replace("watrbx.xyz", $_ENV["APP_DOMAIN"], $asset);
        $asset = str_replace("roblox.com", $_ENV["APP_DOMAIN"], $asset);

        echo $security->signScriptAlt($asset, $id);
        die();
    }

    try {
        header("Content-type: data/octet-stream");
        
        $asset = file_get_contents("http://www.watrbx.wtf/asset/?id=" . $id);    

        $asset = str_replace("watrbx.wtf", $_ENV["APP_DOMAIN"], $asset);
        $asset = str_replace("watrbx.xyz", $_ENV["APP_DOMAIN"], $asset);
        $asset = str_replace("roblox.com", $_ENV["APP_DOMAIN"], $asset);

        die($asset);
    } catch(ErrorException $e) {
        http_response_code(500);
        die();
    }

});

$router->get('/CharacterFetch.aspx', function(){
    die("http://www.robloc.icu/Asset/BodyColors.ashx?Id=2;http://www.robloc.icu/asset/?id=227;http://www.robloc.icu/asset/?id=625;http://www.robloc.icu/asset/?id=102;http://www.robloc.icu/asset/?id=114;http://www.robloc.icu/asset/?id=1639;http://www.robloc.icu/asset/?id=1949;http://www.robloc.icu/asset/?id=565;http://www.robloc.icu/asset/?id=118;http://www.robloc.icu/asset/?id=84;");
});
