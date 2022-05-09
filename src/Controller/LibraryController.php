<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LibraryController extends AbstractController
{

    /**
     * @Route ("/library/list", name="library_list")
     *
     * @return void
     */
    public function list(){
        $response = new Response();
        $response->setContent('Hello World');
        return $response;
    }


}

