<?php include_once("header.php") ?>

    <div class="col-md-8 col-md-offset-2">    	
	   	<div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title">Cadastrar Usuario</h3>
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
					    <label class="col-md-4 control-label">*Login</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="login" placeholder="Nickname">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4 control-label">*Senha</label>
						<div class="col-md-8">
						   	<input type="password" class="form-control" id="senha" placeholder="Senha">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Repetir Senha</label>
						<div class="col-md-8">
						   	<input type="password" class="form-control" id="repetirsenha" placeholder="Repetir senha">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Nome Completo</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="nome" placeholder="Jane Doe">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*CPF</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="cpf" placeholder="xxx.xxx.xxx-xx">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Pais</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="pais" placeholder="Brasil">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Cidade</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="cidade" placeholder="Itajubá">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Estado</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="estado" placeholder="Minas Gerais">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Endereço</label>
						<div class="col-md-8">
						   	<input type="text" class="form-control" id="endereco" placeholder="Rua, numero - bairro">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Data de nascimento</label>
						<div class="col-md-8">
						   	<input type="date" class="form-control" id="dataNascimento">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Email</label>
						<div class="col-md-8">
						   	<input type="email" class="form-control" id="email" placeholder="email@email.com">
						</div>
					</div>
					<div class="form-group">
					    <label class="col-md-4	 control-label">*Categoria</label>
						<div class="col-md-8">
						   	<select class="form-control" id="categoria">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
    </div>

<?php include_once("footer.php") ?>