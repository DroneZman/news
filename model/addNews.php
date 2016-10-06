<?php
include_once '/core/lib.php';
if (isset($_POST['title']) && isset($_POST['text'])) {
    $sql = 'INSERT INTO sportNews (title, text, time) VALUE ("' . $_POST["title"] . '","' . $_POST["text"] . '","' . time() . '")';
    $res = queryMS($sql);
}
