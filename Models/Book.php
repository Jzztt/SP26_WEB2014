<?php

include "./include/connect_db.php";

class Book
{
    private $db;
    public function __construct()
    {
        $this->db = connectDB();
    }
    public function getBook()
    {
        $query = "SELECT * from books";
        $results = $this->db->query($query)->fetchAll();
        return $results;
    }


    public function insertBook($name, $author, $image)
    {
        $query = "INSERT INTO books(name,author,image) VALUES ('$name','$author','$image')";
        return $this->db->exec($query);
    }
    public function getBookById($id)
    {
        $query = "SELECT * from books where id=$id";
        $result = $this->db->query($query)->fetch();
        return $result;
    }
    public function updateBook($id, $name, $author, $image)
    {
        $query = "UPDATE books SET name='$name', author='$author', image='$image' WHERE id=$id";
        return $this->db->exec($query);
    }


    public function deleteBook($id)
    {
        $query = "DELETE FROM books WHERE id=$id";
        return $this->db->exec($query);
    }
}
