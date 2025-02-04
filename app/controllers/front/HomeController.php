<?php
namespace App\Controllers\Front;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
        $this->view('front/home.twig', [
            'title' => 'Home Page',
            'welcome_message' => 'Welcome to our MVC Project!',
            'ff' => 'coco CV!'
        ]);
    }
}