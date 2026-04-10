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
        // dump
        var_dump($this->getUrl());
    }

    public function getUrl() {
        $url = rtrim($_GET['url'], '/'); // removing last forward slash /
        $params = explode('/', $url); // creating an array of params
        return $params;
    }
}
