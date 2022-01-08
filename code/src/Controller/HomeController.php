<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route(path="/")
     */
    public function home()
    {
        return new Response("<body><h1>Hello</h1></body>");
    }

}