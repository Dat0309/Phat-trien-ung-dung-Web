<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .content {
        margin: 20px auto;
        width: 600px;
        border: 2px solid #ddd;
        padding: 10px;
    }

    .content h1 {
        text-align: center;
        color: #F00;
        margin-bottom: 10px;
    }

    .content div.row {
        margin-bottom: 10px;
    }

    .content div.row span {
        width: 100px;
        display: inline-block;
    }

    .content div.row select {
        width: 100px;
    }

    .content div.result span {
        margin: 10px 0px;
        display: inline-block;
    }

    .content div.row input[type=submit] {
        padding: 2px 10px;
    }
    </style>
</head>

<body>
    <?php
        $arrDays = range(1, 31);
        $arrMonths = range(1, 12);
        $arrYears = range(1970, 2021);

        function createSelectBox ($arrData, $name, $keySelected){
            $strDays = '';
            if(!empty($arrData)){
                $strDays .= '<select name="'.$name.'">';
                foreach ($arrData as $key => $value) {
                    if($value == $keySelected) {
                        $strDays .= '<option value="'.$value.'"selected=true>'.$value.'</option>';
                    }
                    else{
                        $strDays .= '<option value="'.$value.'">'.$value.'</option>';
                    }
                }
                $strDays .= '</select>';
            }
            return $strDays;
        }

        $day = (isset($_POST['days-select'])) ? $_POST['days-select'] : 0;
        $month = (isset($_POST['months-select'])) ? $_POST['months-select'] : 0;
        $year = (isset($_POST['years-select'])) ? $_POST['years-select'] : 0;

        $strDays = createSelectBox($arrDays,'days-select', $day);
        $strMonths = createSelectBox($arrMonths,'months-select', $month);
        $strYears = createSelectBox($arrYears,'years-select', $year);
    ?>
    <div class="content">
        <h1>Ki???m tra ng??y th??ng</h1>
        <form action="#" method="post" id="mainForm" name="mainForm">
            <div class="row"> <span>Ng??y</span><?php echo $strDays; ?></div>
            <div class="row"> <span>Th??ng</span><?php echo $strMonths; ?></div>
            <div class="row"> <span>N??m</span><?php echo $strYears; ?></div>
            <div class="row"> <input type="submit" value="Check date"></div>
            <div class="result"> <span>Ng?????i d??ng ???? nh???p: </span>
                <?php
                    echo ' '.$day.'/'.$month.'/'.$year . '<br>';
                    if(checkdate($month, $day, $year)) {
                        echo '<b>Ng??y h???p l???</b>';
                    }else {
                        echo '<b>Ng??y kh??ng h???p l???</b>';
                    }
                ?>
            </div>
        </form>
    </div>
</body>

</html>