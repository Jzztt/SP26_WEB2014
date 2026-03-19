<?php
include './Controllers/BookController.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'index';
$book = new BookController();
switch ($action) {
    case "index":
        $book->index();
        break;
    case "add":
        $book->create();
        break;
    case "store":
        $book->store();
        break;
    case "edit":
        break;
    case "delete":
        $id = $_GET['id'];
        $book ->delete($id);
        break;
    default:
        include './Views/index.php';
}
