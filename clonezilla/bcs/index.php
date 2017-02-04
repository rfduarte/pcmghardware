<script type="text/javascript">
	$("button").click(function() {
		$('.btn').button('loading');
	});
</script>
<script type="text/javascript">
		$(document).ready(function() {
		$("#PageRefresh").click(function() {
		$('#spinner').css ('display' , 'inline');
		$('#loader').load('bcs/');
	});
});
</script>

<script type="text/javascript">

$(function () {

$("[data-toggle='tooltip']").tooltip();

});

</script>


<?php


require_once "/var/www/html/clonezilla/engine/listingPartimag.class.php";
require_once "/var/www/html/clonezilla/engine/details.class.php";
require_once "/var/www/html/clonezilla/view/DetailsViews.php";

$serverStats = new Details; $img = new Imagem; $detailsViews = new DetailsViews;

$img->path = "/etc/"; $serverStats->discvol = "/dev/sda1";

$detailsViews->titlePartimag();

$detailsViews->SysStatus(); $serverStats->ServerStats()->DiscSize(); $detailsViews->refreshButton()->topTable();

$img->Scanpath();

exec ('sudo updateimages');

echo "</table>
		</tbody>";

$detailsViews->formMd5();

echo "</div>";
?>
