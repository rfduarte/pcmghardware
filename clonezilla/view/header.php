<?php require_once "engine/details.class.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title> Laboratório de Hardware </title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="css/mbstyle.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

<script type="text/javascript">
    $(document).ready(function () {
        $("#showPartimag").click(function () {
            $('#loader').css('display', 'inline');
            $('#loader').load('bcs/');
            $("#linkAltera1").click(function () {
            $("#loader").css('display', 'none');
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#showStatus").click(function () {
            $('#loader').css('display', 'inline');
            $('#loader').load('free');
            $("#linkAltera1").click(function () {
            $("#loader").css('display', 'none');
            });
        });
    });
</script>

<script type="text/javascript">  
        $(document).ready(function () {  
            $('.dropdown-toggle').dropdown();  
        });  
   </script>  

 <body>
		
    <div id="header">
			<a title="Home" href="/" ><img src="images/logo_policiaCivil.png" alt="Logo Oficial"></a>
           		<p id="userBox" style="float: right;margin-top: 100px;">
<b><?php
$login = new Details;
$login->Login();
?></b>
        <br />
        <span class="info">Broadcast Cloning Server  versão: 4.0 <!-- Defina a versão da aplicação no "application.properties" --></span>
<br />
<span class="info">
<?php require_once "engine/data.php"; ?></span>
</div>
 <div class="container-fluid">
  
       <div id="navbar-example" class="navbar navbar-inverse">
              <div class="navbar-inner">
                <div class="container" style="width: auto;">
                  <ul class="nav" role="navigation">
                    <li class="dropdown">
                      <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> Thor <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                        <li role="presentation"><a role="menuitem" id="showPartimag" tabindex="-1" href="#!/imagens"><i class="icon_clonezilla-64"></i> Imagens</a></li>
                        <!--<li role="presentation"><a role="menuitem" id="showStatus" tabindex="-1" href="#!/status"><i class="icon-info-sign"></i> Status</a></li>
                      </ul>
                    </li>-->
                  </ul>
                </div>
              </div>
            </div>  

<h3>Servidor de Imagens Clonezilla</h3>
	  
      <div id="loader" style="display:none;">

      <div id="loadercss"></div>
	
	<div id="ajax_loading" style="">Carregando...</div>	
	
</div>
<br>
<hr>
