<?php
// index.php

// Jika memanggil /manga, redirect ke manga.php
if ($_SERVER['REQUEST_URI'] == '/Mangasoul/manga') {
    header('Location: /Mangasoul/view/main view/manga/manga.php');
    exit();
}

// Selain itu, sertakan main view/main.php
include 'view/main view/main.php';
