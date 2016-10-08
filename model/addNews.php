<?php
include_once __DIR__ . "/../view/Article.php";

class addNews extends Article
{
    public function addSport($title, $text)
    {
        $sql = 'INSERT INTO sportNews (title, text, time) VALUE ("' . $title . '","' . $text . '","' . time() . '")' or die;
        parent::addArticle($sql);
    }
}

?>
