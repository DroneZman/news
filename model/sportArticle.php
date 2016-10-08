<?php
include_once __DIR__ . '/../view/Article.php';

class sportArticle extends Article
{
    public function __construct()
    {
        $sql = 'SELECT title, text, time FROM sportNews ORDER BY time DESC';
        parent::showArticle($sql);
    }
}


