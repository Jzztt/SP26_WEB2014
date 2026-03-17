<?php
include './Controllers/BookController.php';
$action = isset($_GET['act']) ? $_GET['act'] : 'index';

switch ($action) {
    case "index":
        $book = new BookController();
        $book->index();
        break;
    case "add":
        break;
    case "edit":
        break;
    case "delete":
        break;
    default:
        include './Views/index.php';
}
