<?php								
if ($_POST["updated"])
{
	exec ('sudo updateimages');
	
	echo "<div class='alert alert-success'> Imagens atualizadas com sucesso</div>";

	}
?>
