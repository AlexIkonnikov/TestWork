<?php 
$percent = 0.1;
$datedepo = strtotime($_POST['date']);
$summadd = ($_POST['summadd']);
$add = ($_POST['add']);
$start_sum = ($_POST['start_sum']);
$time_depo = ($_POST['time_depo']);
$day = date('d', $datedepo);
$mounth = date('m', $datedepo);
$year = date('Y', $datedepo);
$daysy = date('z', mktime(0, 0, 0, 12, 31, $year)); /*Количество дней в году*/ 
$num_days_month = cal_days_in_month(CAL_GREGORIAN, $mounth , $year);
$daysn = $num_days_month - $day + 1; /*Количество дней в месяце, в котором сделан вклад*/

if ($add == 0) {
    for ($i=0; $i < $time_depo; $i++) {
        $start_sum = $start_sum + (($start_sum) * $daysn * ($percent/$daysy));
        $mounth = date('m', strtotime("+1 mounth"));
        $num_days_month = cal_days_in_month(CAL_GREGORIAN, $mounth , $year);
        $daysn = $num_days_month;
    }
}
else {
    for ($i=1; $i < $time_depo; $i++) {
        $start_sum = $start_sum + $summadd + (($start_sum) * $daysn * ($percent/$daysy));
        $mounth = date('m', strtotime("+1 mounth"));
        $num_days_month = cal_days_in_month(CAL_GREGORIAN, $mounth , $year);
        $daysn = $num_days_month;
    }
    $start_sum = $start_sum + (($start_sum) * $daysn * ($percent/$daysy));
}


$myarray = array("summn" => $start_sum);

echo json_encode($myarray);

?>

