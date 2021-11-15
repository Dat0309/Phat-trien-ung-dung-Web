<?php
    function checkEmail($value){
        $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i';
        $flag = false;
        if(preg_match($pattern, $value) == true){
            $flag = true;
        }
        return $flag;
    }
    $check = checkEmail('nguyenvan.teo@gmail.com');
    if($check == 1){
        echo 'Sai';
    }
    else{
        echo 'Dung';
    }
?>