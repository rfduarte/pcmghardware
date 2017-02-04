<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Laboratório de Hardware</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/navbar.css" rel="stylesheet">
</head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Hardware</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a id=asgard href="#asgard">Asgard</a></li>
              <li><a id=thor href="#thor">Thor</a></li>
            </ul>
                      </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

 <div id="intro" class="jumbotron">
        <h1>Bem-vindo!</h1>
        <p>Voce encontra nessa pagina os programas definidos como padrao pela Diretoria de Informatica da Policia Civil! As demais funcoes sao destinadas exclusivamente para uso interno.</p>
      </div>

<div class="" id="partimag"></div>

    </div> <!-- /container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script src="/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#asgard").click(function () {
            $('#partimag').load('asgard.php');
	    $('#intro').hide('#intro');
         });   
	});
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#thor").click(function () {
            $('#partimag').load('thor.php');
	    $('#intro').hide('#intro');
	});
      });
</script>
</body>
</html>
