<?php
//var_dump($info).'</br>';
//echo '</br>';
//foreach ($info as $key => $value) {
////    echo $key.'</br>';
//    foreach ($value as $key2 =>$value2){
//        echo $key.'->'.$key2.':'.$value2.'</br>';
//    }
//}
$dem= 0;
echo count('').'</br>';
foreach ($_SESSION['cart'] as $key => $value) {
    echo $key . '</br>';
    $dem+= count($value);
    $dem --;
    echo $value['shopname'] . '</br>';
    foreach ($value as $key2 => $value2) {
        if ($key2 != 'shopname') {
            echo $key2.': '.$value2['productname'].' = '.$value2['soluong'] . '</br>';
            
        }
    }
    echo '</br></br>';
}
echo $dem.'</br>';
//echo $_SESSION['cart']['UID0008']['69']['productname'].'</br>';
var_dump($_SESSION['cart']);
?>