<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="?act=store" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="image">Image URL:</label>
        <input type="text" id="image" name="image"><br><br>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author"><br><br>

        <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>