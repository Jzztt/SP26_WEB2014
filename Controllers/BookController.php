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
        include './Views/index.php';
    }

    function create()
    {
        include './Views/create.php';
    }

    function store()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $image = $_POST['image'];
            $author = $_POST['author'];
            echo  $name . $image . $author;
        }
    }
}
