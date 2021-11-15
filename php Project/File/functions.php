<?php
    // kiem tra du lieu khac null
    function checkEmpty($value){

        $flag = false;
        if(!isset($value) || trim($value) == ''){
            $flag = true;
        }
        return $flag;
    }

    // kiem tra chieu dai du lieu
    function checkLength($value, $min, $max){
        $flag = false;
        $length = strlen($value);
        if($length < $min || $length > $max){
            $flag = true;
        }
        return $flag;
    }

    // taop ten tap tin ngau nhhien

    function randomString($length = 5){
        // tao ra mot mang gom ca ky tu AZaz09
        $arrChar = array_merge(range('A','Z'), range('a', 'z'), range('0','9'));

        //chuyen mang thanh chuoi
        $chars = implode($arrChar,'');

        // dao chuoi ngau nhien
        $chars = str_shuffle($chars);
        $result = substr($chars, 0, 5);
        return $result;
    }

    // Chuyen don vi do kich thuoc tap tin
    function convertSize($size, $totalDigit = 2, $distance = ''){
        $units = array('B', 'KB','MB','GB','TB');
        $length = count($units);

        for($i = 0; $i <$length; $i++){
            if($size >= 1024){
                $size = $size/1024;
            }else{
                $unit = $units[$i];
                break;
            }
        }
        $result = round($size, $totalDigit) . $distance . $unit;
        return $result;
    }

?>