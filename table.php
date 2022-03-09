<?php

/**
 * 1 = ชวด
 * 2 = ฉลู
 * 3 = ขาล
 * 4 = เถาะ
 * 5 = มะโรง
 * 6 = มะเส็ง
 * 7 = มะเมีย
 * 8 = มะแม
 * 9 = วอก
 * 10 = ระกา
 * 11 = จอ
 * 12 = กุน
 */

// startDate = yyyy-mm-dd เป็น string

// 0 = ปกติมาส, ปกติวาร
// 1 = อธิกวาร
// 2 = อธิกมาส

function year($startDate, $type = 0, $asterismYear)
{
    $date = date_create($startDate);

    $monthEightCount = 1;

    for($month = 1; $month <= 12; $month++)
    {

        $ay = $asterismYear;
        if($month < 5) $ay = $asterismYear - 1;

        for($up = 1; $up <= 15; $up++)
        {
            $d = date_format($date, 'w Y-m-d');
            date_add($date, date_interval_create_from_date_string('1 days'));
            echo($d . " = " . $month . ($month == 8 && $monthEightCount == 2 ? '8' : '') . "-ข-" . $up . " ปีนักษัตร : " . $ay .  "<br/>");
        }
        
        $downLimit = (($month % 2 != 1) || ($type == 1 && $month == 7) ? 15 : 14);
        for($down = 1; $down <= $downLimit; $down++)
        {
            $d = date_format($date, 'w Y-n-d');
            date_add($date, date_interval_create_from_date_string('1 days'));
            echo($d . " = " . $month . ($month == 8 && $monthEightCount == 2 ? '8' : '') . "-ร-" . $down . " ปีนักษัตร : " . $ay .  "<br/>");
        }
        
        echo("--------------------<br/>");

        if($type == 2 & $month == 8 && $monthEightCount < 2) 
        {
            $month--;
            $monthEightCount++;
        } 
    }

    return date_format($date, 'Y-n-d');
}

$yearList = [
    ['BE' => '2400', 'AD' => '1857', 'start_date' => '1856-11-28', 'type' => 0, 'asterism_year' => 6],
    ['BE' => '2401', 'AD' => '1858', 'start_date' => '1857-11-17', 'type' => 2, 'asterism_year' => 7],
    ['BE' => '2402', 'AD' => '1859', 'start_date' => '1858-12-06', 'type' => 0, 'asterism_year' => 8],
    ['BE' => '2403', 'AD' => '1860', 'start_date' => '1859-11-25', 'type' => 1, 'asterism_year' => 9],
    ['BE' => '2404', 'AD' => '1861', 'start_date' => '1860-11-14', 'type' => 2, 'asterism_year' => 10],
    ['BE' => '2405', 'AD' => '1862', 'start_date' => '1861-12-03', 'type' => 0, 'asterism_year' => 11],
    ['BE' => '2406', 'AD' => '1863', 'start_date' => '1862-11-22', 'type' => 2, 'asterism_year' => 12],
    ['BE' => '2407', 'AD' => '1864', 'start_date' => '1863-12-11', 'type' => 0, 'asterism_year' => 1],
    ['BE' => '2408', 'AD' => '1865', 'start_date' => '1864-11-29', 'type' => 1, 'asterism_year' => 2],
    ['BE' => '2409', 'AD' => '1866', 'start_date' => '1865-11-19', 'type' => 2, 'asterism_year' => 3],

    ['BE' => '2410', 'AD' => '1867', 'start_date' => '1866-12-08', 'type' => 0, 'asterism_year' => 4],
    ['BE' => '2411', 'AD' => '1868', 'start_date' => '1867-11-27', 'type' => 0, 'asterism_year' => 5],
    ['BE' => '2412', 'AD' => '1869', 'start_date' => '1868-11-15', 'type' => 2, 'asterism_year' => 6],
    ['BE' => '2413', 'AD' => '1870', 'start_date' => '1869-12-04', 'type' => 0, 'asterism_year' => 7],
    ['BE' => '2414', 'AD' => '1871', 'start_date' => '1870-11-23', 'type' => 1, 'asterism_year' => 8],
    ['BE' => '2415', 'AD' => '1872', 'start_date' => '1871-11-13', 'type' => 2, 'asterism_year' => 9],
    ['BE' => '2416', 'AD' => '1873', 'start_date' => '1872-12-01', 'type' => 0, 'asterism_year' => 10],
    ['BE' => '2417', 'AD' => '1874', 'start_date' => '1873-11-20', 'type' => 2, 'asterism_year' => 11],
    ['BE' => '2418', 'AD' => '1875', 'start_date' => '1874-12-09', 'type' => 0, 'asterism_year' => 12],
    ['BE' => '2419', 'AD' => '1876', 'start_date' => '1875-11-28', 'type' => 1, 'asterism_year' => 1],
    
    ['BE' => '2420', 'AD' => '1877', 'start_date' => '1876-11-17', 'type' => 2, 'asterism_year' => 2],
    // ไม่เติม start_date แล้ว
    ['BE' => '2421', 'AD' => '1878', 'start_date' => '', 'type' => 0, 'asterism_year' => 3],
    ['BE' => '2422', 'AD' => '1879', 'start_date' => '', 'type' => 0, 'asterism_year' => 4],
    ['BE' => '2423', 'AD' => '1880', 'start_date' => '', 'type' => 2, 'asterism_year' => 5],
    ['BE' => '2424', 'AD' => '1881', 'start_date' => '', 'type' => 1, 'asterism_year' => 6],
    ['BE' => '2425', 'AD' => '1882', 'start_date' => '', 'type' => 2, 'asterism_year' => 7],
    ['BE' => '2426', 'AD' => '1883', 'start_date' => '', 'type' => 0, 'asterism_year' => 8],
    ['BE' => '2427', 'AD' => '1884', 'start_date' => '', 'type' => 0, 'asterism_year' => 9],
    ['BE' => '2428', 'AD' => '1885', 'start_date' => '', 'type' => 2, 'asterism_year' => 10],
    ['BE' => '2429', 'AD' => '1886', 'start_date' => '', 'type' => 0, 'asterism_year' => 11],
    
    ['BE' => '2430', 'AD' => '1887', 'start_date' => '', 'type' => 1, 'asterism_year' => 12],
    ['BE' => '2431', 'AD' => '1888', 'start_date' => '', 'type' => 2, 'asterism_year' => 1],
    // ไม่เติม asterism_year แล้ว
    ['BE' => '2432', 'AD' => '1889', 'start_date' => '', 'type' => 0, 'asterism_year' => 0],
    ['BE' => '2433', 'AD' => '1890', 'start_date' => '', 'type' => 2, 'asterism_year' => 0],
    ['BE' => '2434', 'AD' => '1891', 'start_date' => '', 'type' => 0, 'asterism_year' => 0],
    ['BE' => '2435', 'AD' => '1892', 'start_date' => '', 'type' => 1, 'asterism_year' => 0],
    ['BE' => '2436', 'AD' => '1893', 'start_date' => '', 'type' => 2, 'asterism_year' => 0],
    ['BE' => '2437', 'AD' => '1894', 'start_date' => '', 'type' => 0, 'asterism_year' => 0],
    ['BE' => '2438', 'AD' => '1895', 'start_date' => '', 'type' => 0, 'asterism_year' => 0],
    ['BE' => '2439', 'AD' => '1896', 'start_date' => '', 'type' => 2, 'asterism_year' => 0],

    ['BE' => '2440', 'AD' => '1897', 'type' => 0],
    ['BE' => '2441', 'AD' => '1898', 'type' => 1],
    ['BE' => '2442', 'AD' => '1899', 'type' => 2],
    ['BE' => '2443', 'AD' => '1900', 'type' => 0],
    ['BE' => '2444', 'AD' => '1901', 'type' => 2],
    ['BE' => '2445', 'AD' => '1902', 'type' => 0],
    ['BE' => '2446', 'AD' => '1903', 'type' => 1],
    ['BE' => '2447', 'AD' => '1904', 'type' => 2],
    ['BE' => '2448', 'AD' => '1905', 'type' => 0],
    ['BE' => '2449', 'AD' => '1906', 'type' => 0],
    ['BE' => '2450', 'AD' => '1907', 'type' => 2],
    ['BE' => '2451', 'AD' => '1908', 'type' => 1],
    ['BE' => '2452', 'AD' => '1909', 'type' => 2],
    ['BE' => '2453', 'AD' => '1910', 'type' => 0],
    ['BE' => '2454', 'AD' => '1911', 'type' => 0],
    ['BE' => '2455', 'AD' => '1912', 'type' => 2],
    ['BE' => '2456', 'AD' => '1913', 'type' => 0],
    ['BE' => '2457', 'AD' => '1914', 'type' => 1],
    ['BE' => '2458', 'AD' => '1915', 'type' => 2],
    ['BE' => '2459', 'AD' => '1916', 'type' => 0],
    ['BE' => '2460', 'AD' => '1917', 'type' => 1],
    ['BE' => '2461', 'AD' => '1918', 'type' => 2],
    ['BE' => '2462', 'AD' => '1919', 'type' => 0],
    ['BE' => '2463', 'AD' => '1920', 'type' => 2],
    ['BE' => '2464', 'AD' => '1921', 'type' => 0],
    ['BE' => '2465', 'AD' => '1922', 'type' => 0],
    ['BE' => '2466', 'AD' => '1923', 'type' => 2],
    ['BE' => '2467', 'AD' => '1924', 'type' => 0],
    ['BE' => '2468', 'AD' => '1925', 'type' => 1],
    ['BE' => '2469', 'AD' => '1926', 'type' => 2],
    ['BE' => '2470', 'AD' => '1927', 'type' => 0],
    ['BE' => '2471', 'AD' => '1928', 'type' => 2],
    ['BE' => '2472', 'AD' => '1929', 'type' => 1],
    ['BE' => '2473', 'AD' => '1930', 'type' => 0],
    ['BE' => '2474', 'AD' => '1931', 'type' => 2],
    ['BE' => '2475', 'AD' => '1932', 'type' => 0],
    ['BE' => '2476', 'AD' => '1933', 'type' => 1],
    ['BE' => '2477', 'AD' => '1934', 'type' => 2],
    ['BE' => '2478', 'AD' => '1935', 'type' => 0],
    ['BE' => '2479', 'AD' => '1936', 'type' => 1],
    ['BE' => '2480', 'AD' => '1937', 'type' => 2],
    ['BE' => '2481', 'AD' => '1938', 'type' => 0],
    ['BE' => '2482', 'AD' => '1939', 'type' => 2],
    ['BE' => '2483', 'AD' => '1940', 'type' => 0],
    ['BE' => '2484', 'AD' => '1941', 'type' => 0],
    ['BE' => '2485', 'AD' => '1942', 'type' => 2],
    ['BE' => '2486', 'AD' => '1943', 'type' => 0],
    ['BE' => '2487', 'AD' => '1944', 'type' => 2],
    ['BE' => '2488', 'AD' => '1945', 'type' => 1],
    ['BE' => '2489', 'AD' => '1946', 'type' => 0],
    ['BE' => '2490', 'AD' => '1947', 'type' => 2],
    ['BE' => '2491', 'AD' => '1948', 'type' => 0],
    ['BE' => '2492', 'AD' => '1949', 'type' => 1],
    ['BE' => '2493', 'AD' => '1950', 'type' => 2],
    ['BE' => '2494', 'AD' => '1951', 'type' => 0],
    ['BE' => '2495', 'AD' => '1952', 'type' => 1],
    ['BE' => '2496', 'AD' => '1953', 'type' => 2],
    ['BE' => '2497', 'AD' => '1954', 'type' => 0],
    ['BE' => '2498', 'AD' => '1955', 'type' => 0],
    ['BE' => '2499', 'AD' => '1956', 'type' => 2],
    ['BE' => '2500', 'AD' => '1957', 'type' => 1],
    ['BE' => '2501', 'AD' => '1958', 'type' => 2],
    ['BE' => '2502', 'AD' => '1959', 'type' => 0],
    ['BE' => '2503', 'AD' => '1960', 'type' => 0],
    ['BE' => '2504', 'AD' => '1961', 'type' => 2],
    ['BE' => '2505', 'AD' => '1962', 'type' => 0],
    ['BE' => '2506', 'AD' => '1963', 'type' => 1],
    ['BE' => '2507', 'AD' => '1964', 'type' => 2],
    ['BE' => '2508', 'AD' => '1965', 'type' => 0],
    ['BE' => '2509', 'AD' => '1966', 'type' => 2],
    ['BE' => '2510', 'AD' => '1967', 'type' => 0],
    ['BE' => '2511', 'AD' => '1968', 'type' => 0],
    ['BE' => '2512', 'AD' => '1969', 'type' => 2],
    ['BE' => '2513', 'AD' => '1970', 'type' => 1],
    ['BE' => '2514', 'AD' => '1971', 'type' => 0],
    ['BE' => '2515', 'AD' => '1972', 'type' => 2],
    ['BE' => '2516', 'AD' => '1973', 'type' => 1],
    ['BE' => '2517', 'AD' => '1974', 'type' => 0],
    ['BE' => '2518', 'AD' => '1975', 'type' => 2],
    ['BE' => '2519', 'AD' => '1976', 'type' => 0],
    ['BE' => '2520', 'AD' => '1977', 'type' => 2],
    ['BE' => '2521', 'AD' => '1978', 'type' => 0],
    ['BE' => '2522', 'AD' => '1979', 'type' => 1],
    ['BE' => '2523', 'AD' => '1980', 'type' => 2],
    ['BE' => '2524', 'AD' => '1981', 'type' => 0],
    ['BE' => '2525', 'AD' => '1982', 'type' => 0],
    ['BE' => '2526', 'AD' => '1983', 'type' => 2],
    ['BE' => '2527', 'AD' => '1984', 'type' => 0],
    ['BE' => '2528', 'AD' => '1985', 'type' => 2],
    ['BE' => '2529', 'AD' => '1986', 'type' => 0],
    ['BE' => '2530', 'AD' => '1987', 'type' => 1],
    ['BE' => '2531', 'AD' => '1988', 'type' => 2],
    ['BE' => '2532', 'AD' => '1989', 'type' => 0],
    ['BE' => '2533', 'AD' => '1990', 'type' => 1],
    ['BE' => '2534', 'AD' => '1991', 'type' => 2],
    ['BE' => '2535', 'AD' => '1992', 'type' => 0],
    ['BE' => '2536', 'AD' => '1993', 'type' => 2],
    ['BE' => '2537', 'AD' => '1994', 'type' => 0],
    ['BE' => '2538', 'AD' => '1995', 'type' => 0],
    ['BE' => '2539', 'AD' => '1996', 'type' => 2],
    ['BE' => '2540', 'AD' => '1997', 'type' => 1],
    ['BE' => '2541', 'AD' => '1998', 'type' => 0],
    ['BE' => '2542', 'AD' => '1999', 'type' => 2],
    ['BE' => '2543', 'AD' => '2000', 'type' => 1],
    ['BE' => '2544', 'AD' => '2001', 'type' => 0],
    ['BE' => '2545', 'AD' => '2002', 'type' => 2],
    ['BE' => '2546', 'AD' => '2003', 'type' => 0],
    ['BE' => '2547', 'AD' => '2004', 'type' => 2],
    ['BE' => '2548', 'AD' => '2005', 'type' => 0],
    ['BE' => '2549', 'AD' => '2006', 'type' => 1],
    ['BE' => '2550', 'AD' => '2007', 'type' => 2],
    ['BE' => '2551', 'AD' => '2008', 'type' => 0],
    ['BE' => '2552', 'AD' => '2009', 'type' => 1],
    ['BE' => '2553', 'AD' => '2010', 'type' => 2],
    ['BE' => '2554', 'AD' => '2011', 'type' => 0],
    ['BE' => '2555', 'AD' => '2012', 'type' => 2],
    ['BE' => '2556', 'AD' => '2013', 'type' => 0],
    ['BE' => '2557', 'AD' => '2014', 'type' => 1],
    ['BE' => '2558', 'AD' => '2015', 'type' => 2],
    ['BE' => '2559', 'AD' => '2016', 'type' => 0],
    ['BE' => '2560', 'AD' => '2017', 'type' => 0],
    ['BE' => '2561', 'AD' => '2018', 'type' => 2],
    ['BE' => '2562', 'AD' => '2019', 'type' => 0],
    ['BE' => '2563', 'AD' => '2020', 'type' => 0],
    ['BE' => '2564', 'AD' => '2021', 'type' => 2],
    ['BE' => '2565', 'AD' => '2022', 'type' => 0],
    ['BE' => '2566', 'AD' => '2023', 'type' => 2],
    ['BE' => '2567', 'AD' => '2024', 'type' => 0],
    ['BE' => '2568', 'AD' => '2025', 'type' => 1],
    ['BE' => '2569', 'AD' => '2026', 'type' => 2],
    ['BE' => '2570', 'AD' => '2027', 'type' => 0],
    ['BE' => '2571', 'AD' => '2028', 'type' => 0],
    ['BE' => '2572', 'AD' => '2029', 'type' => 2],
    ['BE' => '2573', 'AD' => '2030', 'type' => 1],
    ['BE' => '2574', 'AD' => '2031', 'type' => 2],
    ['BE' => '2575', 'AD' => '2032', 'type' => 0],
];

$nextDate = '1856-11-28';
$nextAsterismYear = 6;
foreach($yearList as $item)
{
    echo "<h1>" . $item['BE'] . "</h1>";
    echo "<h1>" . $item['AD'] . "</h1>";
    $nextDate = year($nextDate, $item['type'], $nextAsterismYear);
    $nextAsterismYear++;
    if($nextAsterismYear > 12) $nextAsterismYear = 1;
}
