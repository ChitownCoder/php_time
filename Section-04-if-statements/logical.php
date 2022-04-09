<?php

$a = 10;

$b = 5;

$c = TRUE;

$d  = FALSE;

if ($a == 10 && $b != 10) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";

if ($a == 10 || $b != 10) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";

if ($c && ($a == 10 || $b > 10)) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";

if ($d || ($a == 10 && $b > 10)) {
    echo "True";
} else {
    echo "False";
}
