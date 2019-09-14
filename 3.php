<?php
echo "<pre>";
for ($i = 1; $i < 3; $i++) {
    for ($j = $i; $j < 3; $j++)
        echo "=&nbsp";
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo ("@&nbsp");
    for ($j =1;  $i < 3; $j++)
        echo "=";
    echo "<br>";
}
$n = 3;
for ($i = 3; $i > 0; $i--) {
    for ($j = $n - $i; $j > 0; $j--)
        echo "=&nbsp";
        
    for ($j = 2 * $i - 1; $j > 0; $j--)
        echo "@&nbsp";
        echo "=";
        
    echo "<br>";
    
}
echo "</pre>";

?>