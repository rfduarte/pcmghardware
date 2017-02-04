<script type="text/javascript">
var auto_refresh = setInterval (function (){$('#systemstatus').load('free')}, 30000);
</script>

<?php

echo "<div id='systemstatus'>";

$unameOS = exec('uname');
$unameKernel = exec('uname -r');
$unameHost = exec('uname -n');
$unameArch = exec('uname -p');
$debVersion = exec('cat /etc/debian_version');
$hostname = exec('hostname');

$uptime = exec("cat /proc/uptime | awk {'print $1'}");
$uptimeDays = floor($uptime/60/60/24);
$uptimeHours = ($uptime/60/60%24);
$uptimeMinutes = ($uptime/60%60);

echo "<div class='bs-docs-aboutsys'>";
echo "<strong>Servidor</strong>: $hostname <br>";
echo "<strong>O.S</strong>: $unameOS <br>";
echo "<strong>Kernel</strong>: $unameKernel <br>";
echo "<strong>Arquitetura</strong>: $unameArch <br>";
echo "<strong>Debian</strong>: $debVersion <br>";
echo "<strong>Tempo em Atividade</strong>: $uptimeDays dias $uptimeHours horas $uptimeMinutes minutos";
echo "</div>";

$cpuUtilization = exec("mpstat |awk {'print $3'}");
$idFabricante = exec("grep vendor /proc/cpuinfo |awk {'print $3'}");
$processorModel = exec("grep 'model name' /proc/cpuinfo |awk -F : '{print $2}' |awk 'FNR == 1 {print}'");

echo "<div class='bs-docs-cpuinfo'>";
echo "<strong>Fabricante</strong>: $idFabricante<br>";
echo "<strong>Modelo</strong>: $processorModel<br>";
echo "<strong>Utilização CPU</strong>: $cpuUtilization%";
echo "<div class='progress'>";
echo "<div class='bar' style='width: $cpuUtilization%'>";
echo "</div></div></div>";


$freeTotal = exec("free -m |awk '/Mem:/{print $2 MB}'");
$freeUtilized = exec("free -m |awk '/cache:/{print $3 MB}'");

$percentFreeTotal = floor(($freeUtilized/$freeTotal * 100));

echo "<div class='bs-docs-memory'>";
echo "<strong>Memoria disponivel:</strong> $freeTotal / <strong>Memoria utilizada</strong> $freeUtilized";
echo "<div class='progress'>";
echo "<div class='bar' style='width: $percentFreeTotal%'> $percentFreeTotal%";
echo "</div></div></div>";

echo "</div>";

?>

