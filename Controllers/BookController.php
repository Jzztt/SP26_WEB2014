<?php
include './Models/Book.php';
class  BookController
{
    public $book;

    public function __construct()
    {
        $this->book = new Book();
    }

    function index()
    {
        $books =  $this->book->getBook();
        var_dump($books);
        include './Views/index.php';
    }
}
