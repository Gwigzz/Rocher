<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{

    /**
     *@Route("/hello/{prenom?world}",name="hello")
     */
    public function hello(Request $request, $prenom)
    {
        // $request = Request::createFromGlobals();
        // $prenom = $request->attributes->get('prenom', 'world');

        return new Response("Hello $prenom");
    }
}
