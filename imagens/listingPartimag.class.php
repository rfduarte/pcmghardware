<?php
class Imagem

	{
	public $path;

	function ScanPath()
		{
		$value = array_diff(scandir($this->path) , array(
			'..',
			'.'
		));
		foreach($value as $i => $imagem)
			{
			$owner = exec("stat -c %U $this->path/$imagem");
			$date = exec("stat -c %y $this->path/$imagem | awk {'print $1'}");
			$perm = exec("stat -c %a $this->path/$imagem");
			$current_date = exec("date +%F");
			$size = exec("sudo du -h $this->path/$imagem | awk {'print $1'}");
			if ($i % 2 == 0)
				{
				$cor = "zebra";
				}
			  else
				{
				$cor = "";
				}

			echo "<tr class='$cor'>";
			echo "<td>";
			if ($perm == 777)
				{
				echo "";
				}
			  else
				{
				echo "<a style='text-decoration:none;' title='' data-toggle='tooltip' data-original-title='Imagem bloqueada por permissões. ATUALIZE!' data-placement='top'> <i class='icon-lock'></i></a>";
				}

			if ($date == $current_date)
				{
				echo "<span class='label label-info'>NOVA</span> $imagem";
				}
			  else
				{
				echo "$imagem";
				}

			echo "</td>";
			
			echo "<td><a data-toggle='modal' data-target='#myModal' href='http://spl-dbn8.brazilsouth.cloudapp.azure.com/imagens/sum.php?Imagem=$imagem'>!</a></td>";
			echo "<td> $date </td><td>$size</td></tr>";
			}
		}
	}

?>
