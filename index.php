<?php
// index.php

// Jika memanggil /manga, redirect ke manga.php
if ($_SERVER['REQUEST_URI'] == '/Mangasoul/manga') {
    header('Location: /Mangasoul/view/main view/manga/manga.php');
} elseif ($_SERVER['REQUEST_URI'] == '/Mangasoul/genres') {
    header('Location: /Mangasoul/view/main view/genres/genre_search.php');
    exit();
}
elseif ($_SERVER['REQUEST_URI'] == '/Mangasoul/menhuas') {
    header('Location: /Mangasoul/page/menhua.php');
    exit();
}
elseif ($_SERVER['REQUEST_URI'] == '/Mangasoul/menwas') {
    header('Location: /Mangasoul/page/menwa.php');
    exit();
}
// Selain itu, sertakan main view/main.php
include 'view/main view/main.php';
