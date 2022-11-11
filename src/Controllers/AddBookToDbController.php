<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddBookToDbController
{
    private PhpRenderer $renderer;
    private BooksModel $model;

    public function __construct(PhpRenderer $renderer, BooksModel $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response): RequestInterface
    {
        $this->model->addBookToDb($_POST);
        return $response->withRedirect('/createbookconfirmed');
    }
}