<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        Welcome PHP1
    </h1>
    <a href="?act=add">Create New Book</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Image</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id']; ?></td>
                    <td><?php echo $book['name']; ?></td>
                    <td><img src="<?php echo 'uploads/img/' . $book['image']; ?>" alt="<?php echo $book['name']; ?>" width="100"></td>
                    <td><?php echo $book['author']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>