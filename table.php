<?php

// startDate = yyyy-mm-dd เป็น string

// 0 = ปกติมาส, ปกติวาร
// 1 = อธิกวาร
// 2 = อธิกมาส

function year($startDate, $type = 0)
{
    $date = date_create($startDate);

    $monthEightCount = 1;

    for($month = 1; $month <= 12; $month++)
    {

        for($up = 1; $up <= 15; $up++)
        {
            $d = date_format($date, 'N Y-m-d');
            date_add($date, date_interval_create_from_date_string('1 days'));
            echo($d . " = " . $month . ($month == 8 && $monthEightCount == 2 ? '8' : '') . "-ข-" . $up . "<br/>");
        }
        
        $downLimit = (($month % 2 != 1) || ($type == 1 && $month == 7) ? 15 : 14);
        for($down = 1; $down <= $downLimit; $down++)
        {
            $d = date_format($date, 'N Y-n-d');
            date_add($date, date_interval_create_from_date_string('1 days'));
            echo($d . " = " . $month . ($month == 8 && $monthEightCount == 2 ? '8' : '') . "-ร-" . $down . "<br/>");
        }
        
        echo("--------------------<br/>");

        if($type == 2 & $month == 8 && $monthEightCount < 2) 
        {
            $month--;
            $monthEightCount++;
        } 
    }
}

$yearList = [
    ['BE' => '2400', 'AD' => '1857', 'start_date' => '1856-11-28', 'type' => 0],
    ['BE' => '2401', 'AD' => '1858', 'start_date' => '1857-11-17', 'type' => 2],
    ['BE' => '2402', 'AD' => '1859', 'start_date' => '1858-12-06', 'type' => 0],
    ['BE' => '2403', 'AD' => '1860', 'start_date' => '1859-11-25', 'type' => 1],
];

foreach($yearList as $item)
{
    echo "<h1>" . $item['BE'] . "</h1>";
    echo "<h1>" . $item['AD'] . "</h1>";
    year($item['start_date'], $item['type']);
}
