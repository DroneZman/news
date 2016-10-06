<?php
include_once __DIR__ . '/view/index.php';
include_once __DIR__ . '/core/lib.php';
include_once __DIR__ . '/model/addNews.php';
fetchMS();
echo 'System time:'. date("Y-m-d H:i:s", time());
