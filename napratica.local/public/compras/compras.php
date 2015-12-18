<?php

require_once dirname(__FILE__) . '\..\library\autoload.php';

$class = $_GET['class'];
$class = new $class();

$method = $_GET['method'];

$params = $_GET['params'];
$data = $class->$method($params['idEA1'], $params['idSF1'], $params['lDadosSA1'], $params['DataDe'], $params['DataAte'], $params['idSA1'], $params['lDadosSF3'], $params['idRef'], $params['DataSaidaDe'], $params['lNotasCancelada'], $params['lNotasCancelada'], $params['lNivel'], $params['nNrNFe'], $params['cSerie'], $params['lDesconsiderarID'], $params['lIgnorarSF3']);

array_shift($data);
/*
 * echo "<pre>";
 * print_r($data);
 * echo "</pre>";
 */

?>

<div class="col-sm-12">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">compras</h3>
		</div>
		
		<div class="panel-body">
			<div class="row">

				<div class="col-md-12">

					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">

									<form role="form" name="form-recarregar" id="form-recarregar" action="/compras/compras.php" method="post">
										<div class="col-sm-2">
											<div class="form-group">
												<div class="input-group date">
													<input type="text" class="form-control" name="DataDe">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-calendar"></i>
													</span>
													<span class="input-group-addon">
														<i class="icon-vassoura"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-sm-2">
											<div class="form-group">
												<div class="input-group date">
													<input type="text" class="form-control" name="DataAte">
													<span class="input-group-addon">
														<i class="glyphicon glyphicon-calendar"></i>
													</span>
													<span class="input-group-addon">
														<i class="icon-vassoura"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-sm-2">
											<a href="/compras/compras.php?<?php
											    echo http_build_query(array(
											        'class' => 'CompVend',
											        'method' => 'SF1Le',
											        'params' => array(
											            'idEA1' => 77,
											            'idSF1' => 0,
											            'lDadosSA1' => false,
											            'DataDe' => '01/10/2015',
											            'DataAte' => '15/10/2015',
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
											    ?>" class="btn btn-default btn-ajax" data-form="#form-recarregar" role="button"><i class="glyphicon glyphicon-refresh"> Recarregar</i></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

				</div>


				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body" style="height: 350px; overflow: auto;">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>ID</th>
										<th>Empresa</th>
										<th>Emissão</th>
										<th>Dt.Entrada</th>
										<th>Docto.</th>
										<th>Mod.</th>
										<th>NFe/RPS.</th>
										<th>Valor</th>
										<th>Valor Pago</th>
										<th>Forma Pag.</th>
										<th>Tipo Pag</th>
										<th>Parcelas</th>
										<th>Fornecedor</th>
										<th>Fantasia</th>
										<th>Hitórico</th>
										<th>Status PS</th>
										<th>Frete</th>
										<th>Transportadora</th>
										<th>Opções</th>
									</tr>
								</thead>
								<tbody>

									<?php foreach ($data as $key => $value):?>
									<tr>
										<td>
											<input type="checkbox" name="ID[]" value="<?php echo $value['SF1_ID'];?>" /></td>
											<td><?php echo $value['SF1_ID'];?></td>
											<td><?php echo $value['EA1_RazaoSocial'];?></td>
											<td><?php echo $value['SF12_Emissao'];?></td>
											<td><?php echo $value['SF12_DtEntSai'];?></td>
											<td><?php echo $value['SF12_Doc'];?></td>
											<td><?php echo $value['SF12_IDEA1'];?></td>
											<td><?php echo $value['SF12_NrNFe'];?></td>
											<td><?php echo $value['SD12_ValItem'];?></td>
											<td><?php echo $value['SE12_ValorPago'];?></td>
											<td></td>
											<td><?php echo $value['SE12_Tipo'];?></td>
											<td><?php echo $value['XXX_Parcelas'];?></td>
											<td><?php echo $value['SA1_Desc'];?></td>
											<td><?php echo $value['SA1_Fantasia'];?></td>
											<td><?php echo $value['SF12_Hist'];?></td>
											<td><?php echo $value['SF3_STATUS'];?></td>
											<td><?php echo $value['SF3_ValFrete'];?></td>
											<td></td>
											<td>
												<a href="/compras/editar.php?id=<?php echo $value['SF1_ID'];?>" data-name="ID" data-value="<?php echo $value['SF12_IDEA1'];?>" data-modal="true" data-target="#modal-editar" class="btn-ajax"> 
													<span class="glyphicon glyphicon-pencil btn-ajax"></span>
												</a>
												<a href="/compras/deletar.php" class="btn-ajax"> 
													<span class="glyphicon glyphicon-trash"></span>
												</a>
											</td>
									</tr>
								<?php endforeach;?>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">

						<form role="form">
							<div class="col-sm-2">
								<div class="form-group">
									<select class="form-control">
										<option>Remessa</option>
										<option>Vencto</option>
									</select>
								</div>
							</div>
							<div class="col-sm-7">
								<div class="form-group">
									<input type="text" class="form-control" size="150px">
								</div>
							</div>
							<div class="col-sm-3">
								<a href="#" class="btn btn-default" role="button">Selecionar
									Empresas</a> <a href="#" class="btn btn-default" role="button">OK</a>
									<a href="#" class="btn btn-default" role="button">Limpar</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div style="float: right;">
						<a href="#" class="btn btn-default" role="button">OK</a> <a
						href="#" class="btn btn-default" role="button">Verificar LOG CNAB</a>
						<a href="#" class="btn btn-default" role="button">Importar Arq.
							Retorno</a> <a href="#" class="btn btn-default" role="button">Listar
							Arquivos</a> <a href="#" class="btn btn-primary btn-openModal"
							role="button">Exportar Arq. Remessa</a> <a href="#"
							class="btn btn-default" role="button">Fatura</a> <a href="#"
							class="btn btn-default" role="button">Imprimir</a> <a href="#"
							class="btn btn-default" role="button">Ajuda</a> <a
							href="/menu/menu.php" class="btn btn-default btn-ajax"
							role="button">Sair</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="email">Email address:</label> <input type="email"
						class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Password:</label> <input type="password"
						class="form-control" id="pwd">
					</div>
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div id="modal-editar" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Compras Alteração</h4>
		</div>
		<div class="modal-body">
			<div id="modal-editar-resp"></div>
		</div>
	</div>
	<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

