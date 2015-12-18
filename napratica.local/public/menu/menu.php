<div class="col-sm-12 menu">
	<div class="row" id="gallery">

		<div class="col-lg-1">
			<p>
				<a href="/usuario/usuario.php" class="btn-ajax" title="Usuário"> <img
					alt="" src="/images/icon_m10.png" width="50px">
				</a>
			</p>
			<p>Usuário</p>
		</div>

		<div class="col-lg-1">
			<p>
				<a href="/faturamento/faturamento.php" class="btn-ajax"
					title="Faturamento"> <img alt="" src="/images/faturamento1.png"
					width="50px">
				</a>
			</p>
			<p>Faturamento</p>
		</div>

		<div class="col-lg-1">
			<p>
				<a
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
					class="btn-ajax" title="compras"> <img alt=""
					src="/images/carrinho.jpg" width="67px">
				</a>
			</p>
			<p>compras</p>
		</div>

	</div>

	<div id="trash" class="row" style="float: right; margin-top: 380px">
		<div class="col-sm-1">
			<a href="#" class="btn-lg btn-ajax" title="Lixeira"> <img alt=""
				src="/images/lixeira.jpg" width="50px">
			</a>
		</div>
	</div>
</div>