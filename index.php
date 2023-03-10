<?php
$a = 1;
while ($a <= 10) {
    for ($b=0; $b <= 10; $b++) { 
        echo "$a x $b = ".$a * $b;
        echo "<br>";           
    }
    echo "<br>";
    $a++;
}
?>