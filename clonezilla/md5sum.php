<?php

chdir('/home/rmn');

$output = exec("md5sum -c MD5SUM");

foreach ($output as $sum) {

print "$sum";

}

?>
