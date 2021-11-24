<?php
    $data = file('questions.txt') or die('Không thể load file');

    // Bo phan tu dau cua mang
    array_shift($data);
    $arrQuestions = array();
    foreach($data as $key => $value){
        // Tacg chuoi theo thu tu
        $tmp_array = explode("|",$value);
        $id = $tmp_array[0];
        $question = $tmp_array[1];
        $arrQuestions[$id] = array('question'=>$question);
    }
?>