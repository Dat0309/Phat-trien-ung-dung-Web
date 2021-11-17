<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
        // require_once 'functions.php';
        // $error ='';
        // $configs = parse_ini_file('config.ini');

        // if(isset($_FILES['fileUpload'])){
        //     $fileUpload = $_FILES['fileUpload'];
        //     $flagSize = checkFileSize($fileUpload['size'], $configs['min_size'], $configs['max_size']);
        //     $flagExt = checkFileExtension($fileUpload['name'], explode('|', $configs['extension']));
        //     if($fileUpload['name'] != null && $flagSize && $flagExt){
        //         $fileNameTmp = $fileUpload['tmp_name'];
        //         $random = randomString(5);
        //         $destination = './files/' . $random . '_' . $fileUpload['name'];
        //         if(move_uploaded_file($fileNameTmp, $destination)){
        //             echo 'upload succeeded!';
        //         }else{
        //             echo 'upload failed!';
        //         }
        //     }
        //     if($flagSize == false){
        //         $error = 'Upload khong thanh cong, vui long upload tao tin tu 100KB toi 5MB va co phan mo rong la jpg, png, zip, mp3';
        //     }
        //     if($flagExt == false){
        //         $error = 'Upload khong thanh cong, vui long Upload tap tin tu 100KB toi 5MB va co phan mo rong la jpg, png, zip, mp3';
        //     }
        // }
        require_once 'functions.php';
        $configs = parse_ini_file('config.ini');

        if (isset($_FILES['fileUpload'])) {
            $fileUpload = $_FILES['fileUpload'];
            foreach ($fileUpload['name'] as $key => $value) {
            $flagSize = checkFileSize($fileUpload['size'][$key], $configs['min_size'], $configs['max_size']);
            $flagExt = checkFileExtension($fileUpload['name'][$key], explode('|', $configs['extension']));
            if ($fileUpload['name'] != null && $flagSize && $flagExt) {
                $fileNameTmp = $fileUpload['tmp_name'][$key];
                $random = randomString(5);
                $destination = './files/' . $random . '_' . $fileUpload['name'][$key];
                if (move_uploaded_file($fileNameTmp, $destination)) {
                echo 'upload succeeded!';
                } else {
                echo 'upload failed!';
                }
            }
            }
        }
    ?>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpload[]">
        <input type="file" name="fileUpload[]">
        <input type="file" name="fileUpload[]">
        <input type="submit" value="Submit">
    </form>
</body>

</html>