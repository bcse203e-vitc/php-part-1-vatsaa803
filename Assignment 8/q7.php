<?php
$original = array(1,2,3,4,5);
print_r($original);
array_splice($original,3,0,"$");
print_r($original);
?>
