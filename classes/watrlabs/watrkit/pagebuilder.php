<?php

namespace watrlabs\watrkit;

use watrlabs\authentication;

class pagebuilder {

    public array $config =
    [
        'title'=>"Page",
    ];

    private $currentpage;

    public array $cssfiles = [];
    public array $metatags = [];
    public array $jsfiles = [];

    public function addResource($resoucelist, $resource, $first = false){
        if ($first){
            array_unshift($this->$resoucelist, $resource);
        } else {
            $this->$resoucelist[] = $resource;
        }
    }

    public function setPageName($name){
        $this->config['title'] = $name;
    }

    public function setPage($page){
        $this->currentpage = $page;
    }

    public function getPageName(){
        return $this->config['title'];
    }

    public function getModal($modalName){
        require("../views/snippets/modals/$modalName.php");
    }

    public function getSnippet($snippetName){
        require("../views/snippets/$snippetName.php");
    }

    public function renderPage() {
        include($this->currentpage);
    }

    public function buildPage($options = null) {
        include("../views/models/main.php");
    }
    
    
}