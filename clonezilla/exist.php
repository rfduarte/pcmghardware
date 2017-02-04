<?php
$filename = '/dev/sda1';

if (!file_exists($filename)) {
    echo "O arquivo $filename existe<br>";
} else {
    echo "O arquivo $filename não existe<br>";
}
?>
