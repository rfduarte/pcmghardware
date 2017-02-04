<!DOCTYPE html>
<link rel="stylesheet" href="../css/_global" type="text/css" media="all">

<script type="text/javascript">
var auto_refresh = setInterval(
function()
{
$('#serverresources').load('/webapp/engine/resources.php #container');
}, 6000);
</script>

<?php
sleep(3);

require_once "/home/rmn/Documentos/phpoo/webapp/view/DetailsViews.php";
require_once "/home/rmn/Documentos/phpoo/webapp/engine/details.class.php";


$detailsvi = new DetailsViews;
$detailsys = new Details;

$detailsvi->titleStats()->controlsBarHeader()->controlsBarFooter();

$detailsys->ServerBasicDetails(); echo "<br>"; $detailsvi->controlsBarHeader()->controlsBarFooter();

echo "<div name='' id='serverresources'></div>";

?>

