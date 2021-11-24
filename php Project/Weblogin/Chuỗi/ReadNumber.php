<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doc so 12 chu so</title>
</head>
<body>
    <?php
        $dictNumbers = array (
            0 => 'không',
            1 => 'một',
            2 => 'hai',
            3 => 'ba',
            4 => 'bốn',
            5 => 'năm',
            6 => 'sáu',
            7 => 'bảy',
            8 => 'tám',
            9 => 'chín'
        );

        $dictUnits = array (
            0 => 'tỷ',
            1 => 'triệu',
            2 => 'nghìn',
            3 => 'đồng'
        );

        $number = 23409384;
        function readNumber3Digit($number, $dictionaryNumber, $readFull = true){

            $number = strval($number); 
            $number = str_pad($number, 3, 0, STR_PAD_LEFT);

            // Lay so hang don vi, chuc, tram
            $digit_0 = substr($number, 2, 1);
            $digit_00 = substr($number, 1, 1);
            $digit_000 = substr($number, 0, 1);

            //doc so hang tram
            $str_000 = $dictionaryNumber[$digit_000].' trăm ';

            // doc so hang chuc
            $str_00 = $dictionaryNumber[$digit_00].' mươi ';
            if($digit_00 == 0) { $str_00 = ' linh '; }
            if($digit_00 == 1) { $str_00 = ' mười '; }

            // doc so hang don vi
            $str_0 = $dictionaryNumber[$digit_0];

            if($digit_00 > 1 && $digit_0 == 1) { $str_0 = ' mốt '; }
            if($digit_00 >= 1 && $digit_0 == 5) { $str_0 = ' lăm '; }
            if($digit_00 > 1 && $digit_0 == 0) { $str_0 = ''; }
            if($digit_00 == 0 && $digit_0 == 0) {
                $str_0 = '';
                $str_00 = '';
            }

            if($readFull == false) {
                if($digit_000 == 0) { $str_000 = ''; }
                if($digit_000 == 0 && $digit_00 == 0) { $str_00 = ''; }
            }
            $result = $str_000.$str_00.$str_0;
            return $result;
        }

        function formatString($str, $type = null){
            // chuyen ve dang chu thuong
            $str = strtolower($str);

            // bo qua khoang trong
            $str = trim($str);

            // chuyen doi thanh mang
            $array = explode('',$str);

            // bo cac phan tu khoang trang trong mang
            foreach($array as $key => $value){
                if(trim($value) == null){
                    unset($value[$key]);
                    continue;
                }
                if($type == 'danh-tu')
                    $array[$key] = ucfirst($value);
            }

            // chuyen mang thanh chuoi
            $result = implode('', $array);

            // chuyen ky tu dau tien cua chuoi thanh chu hoa
            $result = ucfirst($result);
            return $result;
        }

        function readNumber12Digits($number, $dictUnits, $dictNumbers){
            $number = strval($number);
            $number = str_pad($number, 12, 0, STR_PAD_LEFT);
            $arrNumber = str_split($number, 3);

            foreach($arrNumber as $key => $value){
                if($value != '000'){
                    $index = $key;
                    break;
                }
            }

            foreach($arrNumber as $key => $value){
                if($key >= $index){
                    $readFull = true;
                    if($key == $index) $readFull = false;
                    $result[$key] = readNumber3Digit($value, $dictNumbers, $readFull).' '.$dictUnits[$key];
                }
            }

            $result = implode(' ', $result);
            $result = formatString($result);
            
            $result = str_replace('không đồng', 'đồng', $result);
            $result = str_replace('không trăm đồng', 'đồng', $result);
            $result = str_replace('không nghìn đồng', 'đồng', $result);
            $result = str_replace('không trăm nghìn đồng', 'đồng', $result);
            $result = str_replace('không triệu đồng', 'đồng', $result);
            $result = str_replace('không trăm triệu đồng', 'đồng', $result);
            $result = str_replace('không tỷ triệu đồng', 'đồng', $result);
            return $result;
        }

        $result = readNumber12Digits($number, $dictUnits, $dictNumbers);
        echo $result;
    ?>
</body>
</html>