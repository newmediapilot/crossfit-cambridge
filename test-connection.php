<?php
$link = mysqli_connect('localhost:33060', 'bn_wordpress', 'a8406704c1');
if (!$link) {
die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully';
mysqli_close($link);
?>