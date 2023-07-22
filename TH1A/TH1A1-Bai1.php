<?php

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];


$total = array_sum($arrs);

$diff = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
  $diff -= $arrs[$i];
}

$product = 1;
foreach ($arrs as $value) {
  $product *= $value;
}

$quotient = $arrs[0];
for ($i = 1; $i < count($arrs); $i++) {
  if ($arrs[$i] != 0) {
    $quotient /= $arrs[$i];
  } else {
    
    echo "Không thể thực hiện phép chia cho 0.";
    break;
  }
}

echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = " . $total . "<br>";
echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = " . $diff . "<br>";
echo "Tích các phần tử = " . implode(' * ', $arrs) . " = " . $product . "<br>";
echo "Thương các phần tử = " . implode(' / ', $arrs) . " = " . $quotient . "<br>";
?>
