<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LibraryController extends AbstractController
{

    /**
     * @Route ("/library/list", name="library_list")
     *
     * @return void
     */
    public function list(Request $request)
    {
        $bookId = $request->get('id', 0);
        $bookName = $request->get('name', null);

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
                ],
                [
                    'id' => $bookId,
                    'name' => $bookName,
                ]
            ]
        ]);

        return $response;
    }
}
