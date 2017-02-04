<?php

class DetailsViews {

	function SysStatus() {

		//echo "<div class='alert alert-info'> ";
		echo "<ul class='nav nav-pills nav-stacked'>";
	}


	function titlePartimag() {
		
		echo "<h3> Imagens em Servidor</h3>

				<br style='clear:both' />";
	
		return $this;
	}

	function titleStats() {
		
		echo "<h1> Status do Servidor</h1>

				<br style='clear:both' />";
					
		
		return $this;
	}
	
	function refreshButton() {
		
		echo "<div id='spinner' style='display:none;'>
            
            <img src='images/loading.gif' alt='Spinner' /> <div id='ajax_loading' style=''> Carregando...</div> </div> ";

		return $this;
	}

	function topTable () {
		
		echo  "<br>

		<table class='table table-striped'>
          

		   <th>Imagem</th> 
                   
                   <th>MD5SUM</th> 
                   
                   <th>Data</th>
		
		   <th>Tamanho</th>";	
				
		return $this;
	}

	function formMd5 () {

	//echo "<button type='submit' class='btn-primary'>Check!</button></form>";
	
		return $this;
	}

}




