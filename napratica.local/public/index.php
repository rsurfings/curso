<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>ERPFlex</title>

<!-- Bootstrap -->

<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/default.css" rel="stylesheet">
<link rel="stylesheet" href="/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="/css/jquery-ui.min.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<div class="container-fluid">
		<nav role="navigation" class="navbar navbar-default"
			style="margin-top: 10px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button data-target="#bs-example-navbar-collapse-1"
					data-toggle="collapse" class="navbar-toggle" type="button">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a href="/menu/menu.php" class="navbar-brand btn-ajax">ERPFlex</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div id="bs-example-navbar-collapse-1"
				class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)">Cadastros <b
							class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="/usuario/usuario.php" class="btn-ajax">Usuário</a></li>
						</ul></li>

					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)"> Lançamentos <b
							class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="/faturamento/faturamento.php" class="btn-ajax">Faturamento</a></li>
							<li><a
								href="/compras/compras.php?<?php
                                        echo http_build_query(array(
                                            'class' => 'CompVend',
                                            'method' => 'SF1Le',
                                            'params' => array(
                                                'idEA1' => 77,
                                                'idSF1' => 0,
                                                'lDadosSA1' => false,
                                                'DataDe' => '01/09/2015',
                                                'DataAte' => '05/10/2015',
                                                'idSA1' => 0,
                                                'lDadosSF3' => 1,
                                                'idRef' => 0,
                                                'DataSaidaDe' => false,
                                                'lNotasCancelada' => false,
                                                'lNotasCancelada' => false,
                                                'lNivel' => 1,
                                                'nNrNFe' => false,
                                                'cSerie' => false,
                                                'lDesconsiderarID' => false,
                                                'lIgnorarSF3' => false
                                            )
                                        ));
                                        ?>"
								class="btn-ajax">compras</a></li>
						</ul></li>

					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)">Consultas e
							Relatórios <b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Action</a></li>
						</ul></li>


					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)">Suporte à
							Decisão <b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Action</a></li>

						</ul></li>


					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)">Específicos <b
							class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Action</a></li>

						</ul></li>

					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)">Miscelânia <b
							class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Action</a></li>

						</ul></li>

					<li class="dropdown"><a data-toggle="dropdown"
						class="dropdown-toggle" href="javascript:void(0)">Ajuda <b
							class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li><a href="javascript:void(0)">Action</a></li>

						</ul></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</nav>

		<div class="row" id="container"></div>
	</div>

	<div class="loading"></div>

	<!-- /container -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/jquery-ui.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript"
		src="/js/locales/bootstrap-datepicker.pt-BR.min.js"></script>

	<script type="text/javascript" src="/js/init.js"></script>

	<script type="text/javascript">
    	$(document).ready(
    			function() {
    				$("body").app();
    	}(jQuery));
	</script>

</body>
</html>