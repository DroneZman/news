<?php
function connectMS()
{
    $link = mysqli_connect('localhost', 'root', '', 'news');
    return $link;
}

function queryMS($sql)
{
    $link = connectMS();
     $res = mysqli_query($link, $sql);
     return $res;
}

function fetchMS(){
    connectMS();
    $sql = 'SELECT title, text, time FROM sportNews ORDER BY time DESC';
    $res = queryMS($sql);
    $news = mysqli_fetch_array($res);
    while ($news!=NULL){
       echo $news['title'];
        echo '<br>';
        echo $news['text'].'<br>';
        echo date("Y-m-d H:i:s",$news['time']).'<br><br>';
        $news = mysqli_fetch_array($res);

    }


}

