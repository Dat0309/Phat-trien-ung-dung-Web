<?php
    $arrEn = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
    $arrVi = array('Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Thứ 7', 'Chủ nhật');
    $result = date('h:i A D, d-m-Y',time());
    $result = str_replace($arrEn, $arrVi, $result);
    $result = str_replace(',', ', ngày', $result);

    echo $result;
?>