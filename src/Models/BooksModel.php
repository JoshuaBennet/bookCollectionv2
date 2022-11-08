<?php

namespace App\Models;
use PDO;

class BooksModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllBooks(): array
    {

//        possibly add ORDER BY `author` DESC if needed later
        $query = $this->db->prepare('SELECT `id`, `name`, `author`, `price`, `image`, `deleted` FROM `books` ');
        $query->execute();
        return $query->fetchAll();
    }

    // add book function to be added later

//    public function addBookToDB()
//    {
//        $query = $this->db->prepare('INSERT INTO `name`, `author`, `price`, `image`');
//        $query->execute();
//    }
}