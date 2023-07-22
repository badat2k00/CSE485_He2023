<?php
$numbers = [
    'key1' => 12, 
    'key2' => 30, 
    'key3' => 4, 
    'key4' => -123, 
    'key5' => 1234, 
    'key6' => -12565, 
   ];
   $firstElement = current($numbers);
   echo "Phần tử đầu tiên của mảng là".$firstElement ."<br>";

   end($numbers);
   $lastElement = current($numbers);
   
   echo "Phần tử cuối cùng của mảng kết hợp là: " . $lastElement."<br>";

   $largestNumber = max($numbers);
   $smallestNumber = min($numbers);
   
   // Tính tổng các giá trị
   $totalSum = array_sum($numbers);
   
   // Sắp xếp mảng theo chiều tăng giá trị
   $sortedAsc = $numbers;
   asort($sortedAsc);
   
   // Sắp xếp mảng theo chiều giảm giá trị
   $sortedDesc = $numbers;
   arsort($sortedDesc);
   
   // Sắp xếp mảng theo chiều tăng key
   $sortedKeysAsc = $numbers;
   ksort($sortedKeysAsc);
   
   // Sắp xếp mảng theo chiều giảm key
   $sortedKeysDesc = $numbers;
   krsort($sortedKeysDesc);
   
   // Hiển thị kết quả
   echo "Số lớn nhất trong mảng kết hợp là: " . $largestNumber . "<br>";
   echo "Số nhỏ nhất trong mảng kết hợp là: " . $smallestNumber . "<br>";
   echo "Tổng các giá trị trong mảng kết hợp là: " . $totalSum . "<br>";
   
   echo "Mảng kết hợp sau khi sắp xếp tăng dần theo giá trị: ";
   print_r($sortedAsc);
   echo "<br>";
   
   echo "Mảng kết hợp sau khi sắp xếp giảm dần theo giá trị: ";
   print_r($sortedDesc);
   echo "<br>";
   
   echo "Mảng kết hợp sau khi sắp xếp tăng dần theo key: ";
   print_r($sortedKeysAsc);
   echo "<br>";
   
   echo "Mảng kết hợp sau khi sắp xếp giảm dần theo key: ";
   print_r($sortedKeysDesc);
   echo "<br>";
?>