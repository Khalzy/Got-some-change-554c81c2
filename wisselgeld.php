<?php




if ($argv[1] == 0) {

    echo "geen wisselgeld";
} else {
    $test = intval($argv);
    echo (int) $argv[1] . " X " . $test;
}
