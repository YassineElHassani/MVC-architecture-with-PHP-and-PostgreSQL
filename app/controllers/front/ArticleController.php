<?php

class ArticleController
{
    public function index()
    {
        echo "Article list page";
    }

    public function create()
    {
        echo "Create new article";
    }

    public function update()
    {
        echo "Update article";
    }

    public function delete()
    {
        echo "Delete article";
    }

    public function adminArticles()
    {
        echo "Admin articles page";
    }

    public function addToCart()
    {
        echo "Add article to cart";
    }

    public function deleteFromCart()
    {
        echo "Delete article from cart";
    }
}