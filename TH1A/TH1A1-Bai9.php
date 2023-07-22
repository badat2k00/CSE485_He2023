<?php

function convertToLowercaseArray($arrs) {
    return array_map('strtolower', $arrs);
}

// Mảng đầu vào
$arrs = ['Hello', 'WORLD', 'php', 'PYTHON'];


$resultArray = convertToLowercaseArray($arrs);


print_r($resultArray);

?>
