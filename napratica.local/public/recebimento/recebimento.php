<div class="col-sm-12">

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Recebimentos</h3>
		</div>
		<div class="row">
			<!-- 6 + 6 = 12 -->
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
		</div>

		<div class="panel-body">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body" style="height: 350px; overflow: auto;">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
										<th>Opções</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Mark</td>
										<td>Otto</td>
										<td>@mdo</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Jacob</td>
										<td>Thornton</td>
										<td>@fat</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
										<td><a href="#" class="openBtn"> <span
												class="glyphicon glyphicon-download-alt"></span>
										</a></td>
									</tr>

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
							Arquivos</a> <a href="#" class="btn btn-primary openBtn"
							role="button">Exportar Arq. Remessa</a> <a href="#"
							class="btn btn-default" role="button">Fatura</a> <a href="#"
							class="btn btn-default" role="button">Imprimir</a> <a href="#"
							class="btn btn-default" role="button">Ajuda</a> <a href="#"
							class="btn btn-default" role="button">Sair</a>
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

<script type="text/javascript">
		$('.openBtn').click(function(){
			$('#myModal').modal({show:true})
		});
</script>