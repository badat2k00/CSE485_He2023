<?php

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
   );
   $values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
   );

   foreach ($keys as $key => $keyName) {
    // Tạo khóa và giá trị cho mảng $keysAndValues từ mảng $values
    $keysAndValues[$keyName] = $values[$key . "value"];

}
?>