<?php
namespace App\Helpers;

class DisplayBooks
{
    public function createDisplayBooks (array $books): string
    {
        $outputString = '';

        foreach ($books as $book) {

            $outputString .= "<div class='displayBook'>";
            $outputString .= "<p class='bookName'>" . $book['name'] . "</p>";
            $outputString .= "<p class='bookAuthor'>" . $book['author'] . "</p>";
            $outputString .= "<p class='bookPrice'>£" . $book['price'] . "</p>";
            $outputString .= "<p class='bookImage'>" . $book['image'] . "</p>";
            $outputString .= "</div>";
        }
        return $outputString;
    }
}