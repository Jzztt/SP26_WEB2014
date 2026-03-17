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

    public function insertBook() {}
}
