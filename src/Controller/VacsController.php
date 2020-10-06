<?php


namespace AYakovlev\Controller;


use AYakovlev\Core\View;
use AYakovlev\Model\Vacancy;

class VacsController extends AbstractController
{

    public function index(): void
    {
        echo "Index";
    }

    public function articles()
    {
        $data = Vacancy::getAll();
        View::render("vacancies", $data);
    }

}