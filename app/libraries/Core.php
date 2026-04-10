<?php

/**
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
*/
class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        echo 'Hello from Core class!' . "<br>";
        $this->getUrl();
    }

    public function getUrl() {
        echo $_GET['url'] ?? 'url params NOT found!';
    }
}
