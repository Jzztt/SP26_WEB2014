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
            $author = $_POST['author'];
            $image = $_FILES['image']['name'];
            move_uploaded_file(($_FILES['image']['tmp_name']), 'uploads/img/' . $_FILES['image']['name']);
            $succes =  $this->book->insertBook($name, $author, $image);
            if ($succes) {
                header("Location: ?act=index");
            }
        }
    }
    function delete($id)
    {
        $succes = $this->book->deleteBook($id);
        if ($succes) {
            header("Location: ?act=index");
        }
    }
}
