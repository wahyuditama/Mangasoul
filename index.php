<?php
// index.php

// Jika memanggil /manga, redirect ke manga.php
if ($_SERVER['REQUEST_URI'] == '/Mangasoul/manga') {
    header('Location: /Mangasoul/view/main view/manga/manga.php');
} elseif ($_SERVER['REQUEST_URI'] == '/Mangasoul/genres') {
    header('Location: /Mangasoul/view/main view/genres/genre_search.php');
    exit();
}

// Selain itu, sertakan main view/main.php
include 'view/main view/main.php';
