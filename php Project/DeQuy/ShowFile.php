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
        function showAll($path, &$newString){
            $data = scandir($path);
            $newString .= '<ul>';
            foreach($data as $key => $value){
                if($value != '.' && $value !='..'){
                    $dir = $path . '/' . $value;
                    if(is_dir($dir)){
                        $newString .= '<li>'. 'D: ' . $value;
                        showAll($dir, $newString);
                        $newString .= '</li>';
                    }else{
                        $newString .= '<li>' . 'F:' . $value . '</li>';
                    }
                }
            }
            $newString .= '</ul>';
        }
        showAll('.', $newString);
        echo $newString;
    ?>
</body>
</html>