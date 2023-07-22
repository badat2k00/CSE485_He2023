<?php

function convertToUppercaseArray($arrs) {
    return array_map('strtoupper', $arrs);
}

// Mảng đầu vào
$arrs = ['Hello', 'WORLD', 'php', 'PYTHON'];


$resultArray = convertToUppercaseArray($arrs);


print_r($resultArray);

?>
