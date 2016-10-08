<?php
include_once __DIR__ . '/view/index.php';
include_once __DIR__ . '/model/sportArticle.php';
include_once __DIR__ . '/newsController.php';
new sportArticle();
echo 'System time:'. date("Y-m-d H:i:s", time());
