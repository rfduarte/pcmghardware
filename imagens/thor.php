<?php

require_once "/var/www/html/imagens/listingPartimag.class.php";
require_once "/var/www/html/imagens/details.class.php";
require_once "/var/www/html/imagens/DetailsViews.php";

$serverStats = new Details; $img = new Imagem; $detailsViews = new DetailsViews;

$img->path = "/mnt/thor"; $serverStats->discvol = "/dev/sda1"; $serverStats->path = "/mnt/thor";

$detailsViews->titlePartimag();

$detailsViews->SysStatus(); $serverStats->ServerStats()->DiscSize(); $detailsViews->topTable();

$img->Scanpath();

exec ('sudo updateimages');

echo "</table>
		</tbody>";

$detailsViews->formMd5();

?>
