<?php
namespace App\Core;

abstract class Controller {
    protected function view($template, $data = []) {
        $view = new View();
        $view->render($template, $data);
    }
}