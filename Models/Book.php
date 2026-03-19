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

    public function editBook() {}

    public function insertBook($name, $author, $image)
    {
        $query = "INSERT INTO books(name,author,image) VALUES ('$name','$author','$image')";
        return $this->db->exec($query);
    }

    public function deleteBook($id)
    {
        $query = "DELETE FROM books WHERE id=$id";
        return $this->db->exec($query);
    }
}
