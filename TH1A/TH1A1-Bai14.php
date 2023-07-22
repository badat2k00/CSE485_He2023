<?php
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1',
    'giá trị 2'
];

// Gộp hai mảng dựa trên key của từng mảng bằng hàm array_map() và array_merge()
$result = array_map(function ($val1, $val2) {
    return array_merge([$val2], $val1);
}, $array1, $array2);

// Hiển thị mảng kết quả
print_r($result);
?>
