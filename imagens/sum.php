<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Modal title</h4>

            </div>
            <div class="modal-body"><div class="te">
<table class='table table-bordered'>
	
<?php

$val = $_GET['Imagem'];

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
</div></div>

<div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
