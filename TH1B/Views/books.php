<?php
// books.php

// Hàm trả về danh sách sách từ mảng (giả sử đây là CSDL lưu trữ sách)
function getBooks() {
    return array(
        array(
            "title"=> "Murdoch",
            "author"=> "Murdoch Bridgestock",
            "publisher"=> "Dicki-Kertzmann",
            "publisherYear"=> 2007,
            "ISBN"=>'ISBN6',
            'chapters' => 'Chương 1, Chương 2'
        ),
        array(
            'title' => 'Katherine',
            'author' => 'Katherine Crookston',
            'publisher' => 'Harvey LLC',
            'publicationYear' => '2005',
            'ISBN' => 'ISBN5',
            'chapters' => 'Chương 1, Chương 2, Chương 3'
        ),
        array(
            'title' => 'Bernadette',
            'author' => 'Bernadette Ailsbury',
            'publisher' => 'Rogahn, Goodwin and Funk',
            'publicationYear' => '2015',
            'ISBN' => 'ISBN3',
            'chapters' => 'Chương 1, Chương 2, Chương3'
        ),
        array(
            "title"=> "Lilias",
            "author"=> "Lilias Rising",
            "publisher"=> "Wyman Group",
            "publisherYear"=> '2002',
            "ISBN"=> '4',
            'chapters' => 'Chương 5, Chương 6, Chương 1'
        )
    );
}

function addBook($title, $author, $publisher, $publicationYear, $ISBN, $chapters) {
    global $books;
    $newBook = array(
        'title' => $title,
        'author' => $author,
        'publisher' => $publisher,
        'publicationYear' => $publicationYear,
        'ISBN' => $ISBN,
        'chapters' => $chapters
    );
    $books[] = $newBook;
}

function sortBooksByAuthor() {
    global $books;
    usort($books, function ($a, $b) {
        return strcmp($a['author'], $b['author']);
    });
    return $books;
}