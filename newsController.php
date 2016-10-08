<?php
include_once __DIR__ . "/view/Article.php";
include_once __DIR__ . '/model/addNews.php';

if (isset($_POST['title']) && isset($_POST['text'])) {
    $sql = new addNews();
    $sql->addSport($_POST['title'],$_POST['text']);
}