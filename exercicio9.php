<?php

$s = $_POST['string'];
$num = strlen($s);
echo "Palavra: ".$s."<br>";

for ($l = 1; $l <= $num; $l++) {
    for ($c = 1; $c <= $l; $c++) {
        echo $s." ";
    }
    echo "<br>";
}

?>