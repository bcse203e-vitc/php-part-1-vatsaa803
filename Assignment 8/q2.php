<?php
$color = array('white', 'green', 'red');
echo implode(", ", $color) . ",\n";
foreach ($color as $c) {
    echo "• $c<br>";
}
?>
