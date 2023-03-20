<?php

$max = 0;

for($i = 1; $i <= 100; $i++) {
    if ($i > $max){
        $max = $i;
    }
}

echo "Bilangan terbesar adalah: $max";

?>