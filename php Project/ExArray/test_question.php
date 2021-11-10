<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trac nghiem tinh cacht</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<body>
    <?php
        require_once 'function_question.php';
        require_once 'function_option.php';

        $newArr = array();
        foreach($arrQuestions as $key => $value){
            $newArr[$key]['question'] = $value['question'];
            $newArr[$key]['sentences'] = $arrOptions[$key];
        }
    ?>

    <div class="content">
        <h1>
            Trac nghiem tinh cach
        </h1>
        <form action="function_result.php" method="POST" name="mainForm">
            <?php
                $i = 1;
                foreach($newArr as $key => $value){

                    echo '<div class="question">';
                    echo '<p><span>Câu hỏi '.$i.': </span>'.$value['question'].'</p>';
                    echo '<ul>';

                    foreach ($value['sentences'] as $keyC => $valueC) {
                                echo '<li><label><input type="radio" name="'.$key.'" value="'.$valueC["point"].'"> '.$valueC["option"].'</label></li>';
                    }
                    
                    echo '</ul>';
                    $i++;
                    echo '</div>';
                }
            ?>
            <input type="submit" value="Kiem tra" name="submit">
        </form>
    </div>
</body>

</html>