<?php

class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize book properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Get the book's title
    public function getTitle() {
        return $this->title;
    }

    // Get the number of available copies
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Borrow a book
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    // Return a book
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Constructor to initialize member properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Get the member's name
    public function getName() {
        return $this->name;
    }

    // Borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} borrowed '{$book->getTitle()}'.<br>";
        } else {
            echo "{$this->name} could not borrow '{$book->getTitle()}' (no copies available).<br>";
        }
    }

    // Return a book
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.<br>";
    }
}

// Create books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");


// Members1 borrow books1 and available copies
$member1->borrowBook($book1);
echo "<p>Available Copies of <span style='font-weight:bold'>'{$book1->getTitle()}'</span>:
<span style='color:red'>{$book1->getAvailableCopies()}<br></span></p>";


// Members2 borrow books2 and available copies
$member2->borrowBook($book2);
echo "<p>Available Copies of <span style='font-weight:bold'>'{$book2->getTitle()}'</span>: 
<span style='color:red'>{$book2->getAvailableCopies()}<br></span></p>";

?>