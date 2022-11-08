<?php

namespace App\Controllers;


use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class IndexController
{
    private BooksModel $model;

    public function __construct(BooksModel $model)
    {
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        $books = $this->model->getAllBooks();
        $responseBody = [
            'message' => 'Books successfully retrieved from db.',
            'status' => 200,
            'data' => $books
        ];
        return $response->withJson($responseBody);
    }
}