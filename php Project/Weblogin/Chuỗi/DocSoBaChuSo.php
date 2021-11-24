<?php
    $arrayNumber = array(
        0=> 'không',
        1 => 'một',
        2=> 'hai',
        3=> 'ba',
        4=> 'bốn',
        5=>'năm',
        6=>'sáu',
        7=>'bảy',
        8=>'tám',
        9=>'chín'
    );
    $number = 555;
    function readNumber3Digit($number, $dictionnaryNumber, $readFull = true){
        $number = strval($number);
        $number = str_pad($number, 3,0,STR_PAD_LEFT);
        
        echo $number;

        // Lay chu so o hang don vi, chuc, tram
        $digit_0 = substr($number, 2,1);
        $digit_00 = substr($number, 1,1);
        $digit_000 = substr($number, 0,1);

        // doc so hang tram
        $str_000 = $dictionnaryNumber[$digit_000].' trăm ';
        
        // doc so hang chuc
        $str_00 = $dictionnaryNumber[$digit_00].' mươi ';
        if($digit_00 == 0){
            $str_00 = ' linh ';
        }
        if($digit_00 == 1){
            $str_00 = ' mười ';
        }

        //doc so hang don vi
        $str_0 = $dictionnaryNumber[$digit_0];
        if($digit_00 > 1 && $digit_0 == 1){
            $str_0 = 'mốt';
        }
        if($digit_00 >=1 && $digit_0 == 5){
            $str_0 = 'lăm';
        }
        if($digit_00 > 1 && $digit_0 == 0){
            $str_0 = '';
        }
        if($digit_00 == 0 && $digit_0==0){
            $str_0 ='';
            $str_00 = '';
        }
        if($readFull == false){
            if($digit_000 == 0){
                $str_000 ='';
            }
            if($digit_000 == 0 && $digit_00 == 0){
                $str_00 ='';
            }
        }
        $result = $str_000.$str_00.$str_0;
        return $result;
    }
    $result = readNumber3Digit($number, $arrayNumber, false);

    echo $result;
?>