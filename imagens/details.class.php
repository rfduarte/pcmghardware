<?php 
/* Classe responsavel por todos detalhes que serão visiveis ao usuario. Implementação de Orientação a Objetos incompleta!!!
 * As variaveis não apresentam uma utilidade muito grande no momento, mas podem ser utilizadas no futuro.
 * A função Login() corresponde ao login efetuado pelo usuário usando a autenticação Basic do Apache.
 * A função DiscSize() calcula o tamanho do disco com as imagens e se o mesmo estiver com capacidade maior ou igual a 90% ele mostra uma mensagem de aviso.
 * A função ServerStats é responsavel por mostrar o status do servidor relativo a quantidade de imagens, tamanho do pool de discos etc... */
	
	class Details {
		var $activelogin;
		var $discsize;	
		public $discvol;
		var $amountimage;	
		var $capacity;	
		var $utilized;	
		var $available;
			
				
			public function DiscSize () {
				$volumesize = exec ("df $this->discvol | awk '/2/{print $5}'");
					if ($volumesize > 90)
					{
					//echo "<div id='sysMessages' class='errors' style=''><ul><li>O servidor esta atingindo sua capacidade máxima, considere apagar algumas imagens desnecessárias.</li></ul></div>";
						echo " <br> <div class='alert alert-danger'>O servidor esta atingindo sua capacidade máxima, considere apagar imagens desnecessárias.</div>";
	
						return $this;
					}
			}
		
			public function ServerStats () {
				$this->amountimage = $quant= exec("ls $this->path | wc -l");
				$this->capacity = $capacidade= exec ("df -h $this->discvol | awk '/G/ {print $2 }'");
				$this->utilized = $utilizado= exec ("df -h $this->discvol  | awk '/G/ {print $3}'");
				$this->available = $disponivel= exec ("df -h $this->discvol | awk '/G/ {print $4 }'");
				
				echo  "<li class='active'>";
				echo "<a href='#'>";
				echo "<strong>";
				echo "<span class='icon-clonezilla'></span> Imagens: <span class='badge'>$quant</span>&nbsp &nbsp;";
				echo "<span class='glyphicon glyphicon-hdd'></span> Capacidade: <span class='badge'>$capacidade</span> &nbsp &nbsp; ";
				echo "Utilizado: <span class='badge'>$utilizado</span>  / ";
				echo "<span class='badge'>$disponivel</span> ";
				echo "</strong>";
				echo "</a></li></ul>";
				if($quant <= 0) {
				echo "<br> <div class='alert alert-warning'>Não foram encontradas imagens, verifique se o servidor esta funcionndo</div>";
				}
					
						return $this;
			}
			
			function ServerBasicDetails () {
				
				$unameOS = exec('uname');
				$unameKernel = exec('uname -r');
				$unameHost = exec('uname -n');
				$unameArch = exec('uname -p');
				$debVersion = exec('cat /etc/debian_version');
				echo "<b><p>Sistema Operacional: $unameOS </p></b>
					  <b><p>Versão do Kernel: $unameKernel</p></b>
					  <b><p>Nome do servidor: $unameHost</p></b>
					  <b><p>Arquitetura: $unameArch</p></b>
					  <b><p>Debian: $debVersion</p></b>";

			}
	
			function ServerResources () {
				
				$freeTotal = exec("free -m |awk '/Mem:/{print $2}'");
				$freeUtilized = exec("free -m |awk '/Mem/{print $3}'");
				$dfH = exec("df -h | awk {'print $1'}");
			
				echo "<b><p>Total memória: $freeTotal</p><b>";
				echo	"<b><p>Memória utilizada: $freeUtilized</p></b>";
				
	
			}
	
}
?>
