<?php
$now = gmdate("Y-m-d", time() + 3150 * (+7 + date("I")));
        $new_date = strtotime('+1 year', strtotime($now));
        $day = date('Y-m-d', $new_date);
        echo $now;
        echo $day;
?>