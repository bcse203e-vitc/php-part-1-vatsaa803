<?php
$array1 = array(array(77,87),array(23,45));
$array2 = array("w3resource","com");
$result=[];
for($i=0;$i<count($array1);$i++){
    array_unshift($array1[$i],$array2[$i]);
    $result[]=$array1[$i];
}
print_r($result);
?>
