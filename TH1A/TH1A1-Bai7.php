<?php
/* 
Tìm và hiển thị tất cả các số từ 100 đến 200 và chia hết cho 5 trong mảng sau:
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
*/
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
foreach ($array as $value){
    if($value >=100 && $value<=200 && $value%5==0){
   echo "$value" .",";
    }
}

?>