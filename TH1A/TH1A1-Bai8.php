<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

// Biến lưu chuỗi có độ dài lớn nhất và nhỏ nhất
$maxString = $minString = $array[0];

foreach ($array as $string) {
    if (strlen($string) > strlen($maxString)) {
        $maxString = $string;
    }
    
    if (strlen($string) < strlen($minString)) {
        $minString = $string;
    }
}

// Hiển thị kết quả
echo "<em>Chuỗi lớn nhất là $maxString, độ dài = " . strlen($maxString) ."</em> "."<br>";
echo "<em>Chuỗi nhỏ nhất là $minString, độ dài = " . strlen($minString)."</em>";
?>
