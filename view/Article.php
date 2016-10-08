<?php

class Article
{
    public $title;
    public $text;

    public function showArticle($sql)
    {
        $link = mysqli_connect('localhost', 'root', '', 'news');
        $res = mysqli_query($link, $sql);
        if ($res == true) {
            while (true == $news = mysqli_fetch_array($res)) {
                echo $news['title'];
                echo '<br>';
                echo $news['text'] . '<br>';
                echo date("Y-m-d H:i:s", $news['time']) . '<br><br>';

            }
        }

    }

    public function addArticle($sql)
    {
        $link = mysqli_connect('localhost', 'root', '', 'news');
        mysqli_query($link, $sql);
    }
}
