<?php

require_once dirname(__FILE__) . '\..\library\autoload.php';

$cv = new CompVend();
$data = $cv->SF3Le(array('SF1',1532891));
print_r($cv);

?>

<form role="form">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="docto">Docto:</label> 
			<input type="text" class="form-control" id="docto" name="docto" value="">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="sequencia">Sequência:</label>
			<input type="text" class="form-control" id="sequencia" name="sequencia" value="">
		</div>
	</div>


	<div class="col-sm-6">
		<div class="form-group">
			<label for="fornecedor">Fornecedor:</label> 
			<div class="input-group">
				<input type="text" class="form-control" name="txtFornecedor">
				<span class="input-group-addon">
					<select name="fornecedor">
						<option>teste</option>
						<option>teste</option>
						<option>teste</option>
						<option>teste</option>
						<option>teste</option>
					</select>
				</span>						
			</div>
		</div>
	</div>

	<div class="col-sm-3">
		<div class="form-group">
			<label for="docto">Emissão:</label> 
			<div class="input-group date">
				<input type="text" class="form-control" name="dataEmissao">
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-calendar"></i>
				</span>						
			</div>
		</div>
	</div>

	<div class="col-sm-3">

	</div>

	<div class="col-sm-6">
		<div class="form-group">
			<label for="sequencia">Hitórico:</label>
			<input type="text" class="form-control" id="sequencia" name="sequencia" value="">
		</div>
	</div>


	<div class="col-sm-3">

	</div>

	<div class="col-sm-3">

	</div>

	<div class="col-sm-6">
		<div class="form-group">
			<label for="nivelAcesso">Nível de Acesso:</label>
			<select  class="form-control" name="nivelAcesso">
				<option>teste</option>
				<option>teste</option>
				<option>teste</option>
				<option>teste</option>
				<option>teste</option>
			</select>
		</div>
	</div>

	<div class="clearfix">
	</div>

	<div class="panel panel-primary">
		<!-- Default panel contents -->
		<div class="panel-heading">
			<h3 class="panel-title">Itens Comprados</h3>
		</div>

		<div class="panel-body">
			<p>...</p>
		</div>

		<!-- Table -->
		<div data-example-id="hoverable-table" class="bs-example">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="form-group">
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div>
	</div>

</form>