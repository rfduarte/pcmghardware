<!DOCTYPE html>
<html>
<head>
<title> Laboratório de Hardware </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
<table class='table table-bordered'>
	
<?php

$val = $_POST['Imagem'];

echo "<thead><th>$val</th><thead><tbody>";

$dir = "/home/partimag/$val";

//echo $dir;

chdir($dir);

$result = explode("\n", `md5sum -c MD5SUMS`);

foreach($result as $val) {

if (preg_match("/OK/" , "^$val")):

echo "<tr class='success'><td>$val</td></tr>";

elseif (preg_match("/FAILED/" , "^$val")):

echo "<tr class='error'><td>$val</td></tr>";

endif;

}

?>
</tbody>
</table>
