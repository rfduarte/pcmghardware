<div id="container2" >
<?php

sleep(3);
$freeTotal = exec("free -m |awk '/Mem:/{print $2 MB}'");
$freeUtilized = exec("free -m |awk '/Mem:/{print $3 MB}'");
$dfH = exec("df -h | awk {'print $1'}");
$uptime = exec("uptime |awk '{print $3}'");
$loadAverage = exec("uptime |awk '{print $8, $9, $10 }'");
$usersConnected = exec("users");

echo "<b><p>Total memória: $freeTotal</p></b>";
echo	"<b><p>Memória utilizada: $freeUtilized</p><b>";
echo 		"<b><p>Tempo em atividade: $uptime</p><b>";
echo			"<b><p>Carga do sistema: $loadAverage</p><b>";
echo				"<b><p>Usuários conectados: $usersConnected</p><b>";
?>
</div>
