<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\UsersAuthService;
use AYakovlev\Core\View;
use AYakovlev\Model\Article;
use AYakovlev\Model\User;

class BlogController
{
    private View $view;
    /** @var User|null */
    private ?User $user;

    public function __construct()
    {
        $this->user = UsersAuthService::getUserByToken();
        $this->view = new View();
        $this->view->setVar('user', $this->user);
    }

    public function index(): void
    {
        echo "Index";
    }

    public function articles()
    {
        $data = Article::getAll();
        View::render("articles", $data);
    }

}