<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $userData = ["username" => "MantaY", "age" => 23, "favorite" => "Sci-fi"];

        $bookData = [
            ["id" => 1, "image" => "https://covers.openlibrary.org/b/olid/OL27213498M-M.jpg", "title" => "It Ends With Us", "desc" => "Cool book"],
            ["id" => 2, "image" => "https://covers.openlibrary.org/b/olid/OL25418275M-M.jpg", "title" => "POWER", "desc" => "Cool book"],
            ["id" => 3, "image" => "https://covers.openlibrary.org/b/olid/OL28230579M-M.jpg", "title" => "The Suble Art of Not Giving A ", "desc" => "Cool book"],
            ["id" => 4, "image" => "https://covers.openlibrary.org/b/olid/OL16980586M-M.jpg", "title" => "Rich Dad, Poor Dad", "desc" => "Cool book"],
            ["id" => 5, "image" => "https://covers.openlibrary.org/b/id/12749873-M.jpg", "title" => "It Starts With Us", "desc" => "Cool book"],
            ["id" => 6, "image" => "https://covers.openlibrary.org/b/olid/OL26992991M-M.jpg", "title" => "Court of Mist and Fury", "desc" => "Cool book"],
            ["id" => 7, "image" => "https://covers.openlibrary.org/b/olid/OL22856696M-M.jpg", "title" => "Harry Potter", "desc" => "Cool book"],
            ["id" => 8, "image" => "https://covers.openlibrary.org/b/id/13180424-M.jpg", "title" => "Twisted Love", "desc" => "Cool book"],
            ["id" => 9, "image" => "https://covers.openlibrary.org/b/olid/OL27918581M-M.jpg", "title" => "Atomic Habits", "desc" => "Cool book"],
            ["id" => 10, "image" => "https://covers.openlibrary.org/b/id/10389354-M.jpg", "title" => "The Psychology of Money", "desc" => "Cool book"],
            ["id" => 11, "image" => "https://covers.openlibrary.org/b/olid/OL29191495M-M.jpg", "title" => "Ugly Love", "desc" => "Cool book"],
            ["id" => 12, "image" => "https://covers.openlibrary.org/b/olid/OL26425330M-M.jpg", "title" => "Game of Thrones", "desc" => "Cool book"]
        ];


        return view('index')->with("userData", $userData)->with("bookData", $bookData);
    }

    public function detail()
    {
        $bookTest = ["title" => "A Little Princess", "page" => 75, "writer" => "J.K Rowlins", "publisher" => "Rowlins Publish"];
        $book = [
            "id" => 1,
            "isbn" => "1471156265",
            "title" => "It Ends With Us",
            "author" => "Colleen Hoover",
            "image" => "https://covers.openlibrary.org/b/olid/OL27213498M-M.jpg",
            "publisher" => "Simon & Schuster Ltd",
            "category" => "Novel",
            "pages" => "384",
            "language" => "Portuguese",
            "publish_date" => "2016-08-02",
            "subjects" => ["Fiction", "Romance", "Contemporary"],
            "desc" => "Lily hasn't always had it easy, but that's never stopped her from working hard for the life she wants. She's come a long way from the small town where she grew up—she graduated from college, moved to Boston, and started her own business. And when she feels a spark with a gorgeous neurosurgeon named Ryle Kincaid, everything in Lily's life seems too good to be true. Ryle is assertive, stubborn, maybe even a little arrogant. He's also sensitive, brilliant, and has a total soft spot for Lily. And the way he looks in scrubs certainly doesn't hurt. Lily can't get him out of her head. But Ryle's complete aversion to relationships is disturbing. Even as Lily finds herself becoming the exception to his 'no dating' rule, she can't help but wonder what made him that way in the first place. As questions about her new relationship overwhelm her, so do thoughts of Atlas Corrigan—her first love and a link to the past she left behind. He was her kindred spirit, her protector. When Atlas suddenly reappears, everything Lily has built with Ryle is threatened. With this bold and deeply personal novel, It Ends With Us is a heart-wrenching story and an unforgettable tale of love that comes at the ultimate price."
        ];

        return view('details', ['bookTest' => $bookTest], ["book" => $book]);
    }
}
