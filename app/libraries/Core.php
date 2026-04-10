<?php

/**
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
*/

class Core {
    // set variables
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    // Constructor
    public function __construct()
    {
        // if there are params
        if(isset($_GET['url'])) {
            $dataUrl = $this->getUrl();
            // setController
            $this->setController($dataUrl);
        }
    }

    public function getUrl() {
        $url = rtrim($_GET['url'], '/'); // removing last forward slash /
        $params = explode('/', $url); // creating an array of params
        return $params;
    }

    public function setController($data) {
        // uppercase first letter
        $nameController = ucwords($data[0]);
        // create file name
        $fileName = $nameController . '.php';

        // define root and get path
        define('ROOT', dirname(__DIR__));
        $path = ROOT. "/controllers/" . $fileName;

        // check if exists in folder
        if(file_exists($path)) {
            echo 'file exists' . '<br>';
            $this->currentController = $nameController;
            echo 'Controller is: ' . $this->currentController;
        } else {
            echo 'file NOT exists' . '<br>';
            echo 'Controller is: ' . $this->currentController;
        }
    }
}
