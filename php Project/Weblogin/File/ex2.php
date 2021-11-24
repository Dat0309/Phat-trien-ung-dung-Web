<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $file = 'E:\NAM3\Phat-trien-ung-dung-Web\php Project\File\data.txt';
    $data = file($file);

    // đếm số hàng
    $lines = count($data);

    // đếm số từ
    $string = file_get_contents($file);
    $words = str_word_count($string);

    // đếm khoảng trắng
    $spaces = substr_count($string, ' ');

    // đếm kí tự
    preg_match_all('/\S/ismU', $string, $matches);
    $chars = count($matches[0]);

    echo 'Tổng số hàng: ' . $lines . '<br>';
    echo 'Tổng số từ: ' . $words . '<br>';
    echo 'Tổng số khoảng trắng: ' . $spaces . '<br>';
    echo 'Tổng số kí tự: ' . $chars . '<br>';
?>
</body>
</html>
