<?php
    $file = 'E:\NAM3\Phat-trien-ung-dung-Web\php Project\File\data.txt';

    if (file_exists($file)) {
        $arrData = file($file);
        // Xoa
        unset($arrData[2]);
        file_put_contents($file, $arrData);
    } else {
        echo 'Tập tin không tồn tại';
    }
?>