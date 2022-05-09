<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class LibraryController extends AbstractController
{

    /**
     * @Route ("/library/list", name="library_list")
     *
     * @return void
     */
    public function list()
    {
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => [
                [
                    'id' => 1,
                    'name' => 'Library 1',
                ],
                [
                    'id' => 2,
                    'name' => 'Library 2',
                ]
            ]
        ]);

        return $response;
    }
}
