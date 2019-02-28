<?php

require_once __DIR__ . '/../config/config.php';

$link = createConnection();
$result = mysqli_query($link, 'SELECT * FROM `users` WHERE id = $id');
$row = mysqli_fetch_assoc($result);

echo $row['images'];





