<?php
error_reporting(- 1);
ini_set('display_errors', 'On');

require_once dirname(__FILE__) . '\..\library\autoload.php';

$cv = new CompVend();
$SF3Le = $cv->SF3Le('SF1', $_GET['id']);
array_shift($SF3Le);

$SD1Le = $cv->SD1Le($_SESSION['idEA1'], $_GET['id']);
array_shift($SD1Le);

$cliFor = new CliFor();
$dataCliFor = $cliFor->Le($_SESSION['idEA1'], 0, 0);
array_shift($dataCliFor);

$perfil = new Perfil();
$dataPerfil = $perfil->Le();
array_shift($dataPerfil);

/*echo "<pre>";
print_r($SD1Le);
echo "</pre>";
*/
?>

<div class="row">
	<div class="col-lg-12">
		<ul role="tablist" class="nav nav-tabs" id="myTabs">
			<li class="active" role="presentation"><a aria-expanded="false"
				aria-controls="home" data-toggle="tab" role="tab" id="home-tab"
				href="/compras/cabecalho-itens.php?<?php echo $_GET['id'];?>#home">Cabeçalho
					e Itens</a></li>
			<li role="presentation"><a aria-controls="profile" data-toggle="tab"
				id="profile-tab" role="tab"
				href="/compras/dados-importacao.php?<?php echo $_GET['id'];?>#profile"
				aria-expanded="true">Dados de Importação</a></li>
			<li role="presentation"><a aria-controls="pagamento"
				data-toggle="tab" id="pagamento-tab" role="tab"
				href="/compras/pagamento.php?<?php echo $_GET['id'];?>#pagamento"
				aria-expanded="true">Pagamento</a></li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div aria-labelledby="home-tab" id="home"
				class="tab-pane fade active in" role="tabpanel">

				<form role="form">
					<div class="col-sm-3">
						<div class="form-group">
							<label for="docto">Docto:</label> <input type="text"
								class="form-control" id="docto" name="docto" value="<?php echo $SD1Le[0]['SF12_Doc'];?>">
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label for="sequencial">Sequência:</label> <input type="text"
								class="form-control" id="sequencial" name="sequencial" value="<?php echo $SD1Le[0]['SF12_NumSeq'];?>">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="clifor">Fornecedor:</label>
							<div class="input-group">
								<input type="text" class="form-control" name="txtclifor" id="txtclifor" value="<?php echo $SD1Le[0]['SA1_Desc'];?>"> <span
									class="input-group-addon">
									<select style="width: 200px" name="clifor" id="clifor">
										<?php foreach ($dataCliFor as $key => $value):?>
											<option value="<?php echo $value['SA1_ID'];?>"
											<?php echo $value['SA1_ID'] == $SD1Le[0]['SA1_ID'] ? 'selected="selected"':'';?>><?php echo $value['SA1_Desc'];?></option>
										<?php endforeach;?>
									</select>
								</span>
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="form-group">
							<label for="data_emissao">Emissão:</label>
							<div class="input-group date">
								<input type="text" class="form-control" name="data_emissao" value="<?php echo $SD1Le[0]['SF12_Emissao'];?>"> <span
									class="input-group-addon"> <i
									class="glyphicon glyphicon-calendar"></i>
								</span>
							</div>
						</div>
					</div>

					<div class="col-sm-3"></div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="historico	">Hitórico:</label> <input type="text"
								class="form-control" id="historico" name="historico" value="<?php echo $SD1Le[0]['SF12_Hist'];?>">
						</div>
					</div>


					<div class="col-sm-3"></div>

					<div class="col-sm-3"></div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="nivelAcesso">Nível de Acesso:</label> <select
								class="form-control" name="nivelAcesso">
								<?php foreach ($dataPerfil as $key => $value):?>
								<option value="<?php echo $value['MN2_ID'];?>"><?php echo $value['MN2_Desc'];?></option>
								<?php endforeach;?>
							</select>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="panel panel-primary">
						<!-- Default panel contents -->
						<div class="panel-heading">
							<h3 class="panel-title">Itens Comprados</h3>
						</div>

						<div class="panel-body">
							<p></p>
						</div>

						<!-- Table -->
						<div data-example-id="hoverable-table" class="bs-example">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Natureza</th>
										<th>Cód. Produto</th>
										<th>Produto/Serviço</th>
										<th>Variante</th>
										<th>Prod/Serv</th>
										<th>OP/Os</th>
										<th>Qtde.</th>
										<th>UM</th>
										<th>Preço unit.</th>

										<th>Valor Total</th>
										<th>Estoque</th>
										<th>Opções</th>
									</tr>
								</thead>
								<tbody>

								<?php foreach ($SD1Le as $key => $value):?>
									<tr>
										<th scope="row"><?php echo $value['SD1_ID'];?></th>
										<td><?php echo $value['SED_Desc'];?></td>
										<td><?php echo $value['SB1_Codigo'];?></td>
										<td><?php echo $value['SB1_Desc'];?></td>
										<td><?php echo $value['SB2_ChaveItensVar'];?></td>
										<td><?php echo $value['SB1_AtuEst'];?></td>
										<td><?php echo $value['SC2_Doc'];?></td>
										<td><?php echo $value['SD12_Quant'];?></td>
										<td><?php echo $value['SB1_UM'];?></td>
										<td><?php echo $value['SD12_PrcUni'];?></td>

										<td><?php echo $value['SD12_ValItem'];?></td>
										<td></td>
										<td>
											<a href="/compras/editar.php?id=<?php echo $value['SD1_ID'];?>" data-name="ID" data-value="<?php echo $value['SF12_IDEA1'];?>" data-modal="true" data-target="#modal-editar" class="btn-ajax"> 
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

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-body" style="float:right">
										<form role="form">
											<div class="col-sm-12">
												<a href="#" class="btn btn-default" role="button">Trastrear Valores</a> 
												<a href="#" class="btn btn-default" role="button">Incluir</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="modal-footer">
							
							
							<button type="button" class="btn btn-default">Contrato/NF</button>
							<button type="button" class="btn btn-default">Gravar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Sair</button>
						</div>
					</div>

				</form>

			</div>
			<div aria-labelledby="profile-tab" id="profile" class="tab-pane fade"
				role="tabpanel"></div>

			<div aria-labelledby="pagamento-tab" id="pagamento"
				class="tab-pane fade" role="tabpanel"></div>

		</div>
	</div>
</div>

