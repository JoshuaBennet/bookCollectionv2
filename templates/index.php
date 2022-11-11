<?php
use App\Helpers\DisplayBooks;
$displayBooks = new DisplayBooks;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Joshua Bennet's PHP Book Collection App" />
    <title>Book Collection</title>
</head>
<body>
<h1>Josh's Library</h1>
<div>The Bookshelf</div>
<div class="registrationContainer">
    <a href="/addBook">Add a new book</a>
</div>
<div>
    <section class="bookshelf">
        <?php
            echo $displayBooks->createDisplayBooks($books);
        ?>
    </section>
</div>
</body>
</html>
