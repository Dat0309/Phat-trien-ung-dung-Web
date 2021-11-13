<?php
    $year = 2016;
    $mouth = 2;

    $timestamp = mktime(0,0,0,$mouth, 1, $year);
    $totalDays = date('t', $timestamp);

    echo $totalDays;
?>