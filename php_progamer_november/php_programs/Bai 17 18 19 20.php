<?php
for ($i = 0; $i <= 5; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        echo "";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "  *";
    }
    echo "<br>";
}
?>