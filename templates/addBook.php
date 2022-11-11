<?php
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Joshua Bennet's Book Collectors App">
    <title>Add a book to the library</title>
</head>
<body>
<h1>Please fill in the form to add a book</h1>
<form>
    <label for="title" id="title">Book Title:</label>
    <input type="text" name="title" alt="input for book title" placeholder="Book Title" required>
    <label for="author" id="author">Author:</label>
    <input type="text" name="author" alt="input for book author" placeholder="Author" required>
    <label for="price" id="price">Price:£</label>
    <input type="number" name="price" alt="input for the book price" placeholder="00.00" required>
    
<!--    possibly add an img option, later if needed-->

    <input type="submit" value="Submit Your Book">

</form>
</body>
</html>