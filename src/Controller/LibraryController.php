<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LibraryController extends AbstractController
{

    private $logger;

    public function __construct()
    {

    }

    /**
     * @Route ("/library/list", name="library_list")
     *
     * @return void
     */
    public function list(Request $request, LoggerInterface $logger)
    {
        $bookId = $request->get('id', 0);
        $bookName = $request->get('name', null);

        $logger->info('this is a Log by parameter');

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
