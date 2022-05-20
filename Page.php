<?php

include_once('config.php');

class Page {
    public $title;
    public $body;
    public function __construct() {
        global $pageTitle;
        $this->title = $pageTitle;
        $this->body = '<h1>Gyak</h1>';
    }
    public function showPage() {
        $page = "
        <!DOCTYPE html>
        <html>
        <head>
            <title>$this->title</title>
        </head>
        <body>
        $this->body
        </body>
        </html>
        ";
        echo $page;
    }
}