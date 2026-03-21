<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Edit Book</h3>
    <form method="POST" action="?act=update&id=<?= $book['id'] ?>" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $book['name'] ?>"><br><br>

        <label for="image">Image URL:</label>
        <input type="file" id="image" name="image"><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="<?= $book['author'] ?>"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>