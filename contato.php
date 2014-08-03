<?php
	$page_title = "Pioverá | Contato";
	$body_id = $menu_active = "contato";
	include('head.php');
	include('menu.php');
?>
		
		<div class="container page-header" id="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h1>Entre em contato</h1>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-8" id="conteudo">
					<form class="form-horizontal" role="form" action="" method="">
						<div class="form-group form-group-lg">
							<label class="col-sm-3 col-md-2 text-right control-label" for="nome">Nome</label>
							<div class="col-sm-9 col-md-10">
								<input class="form-control" type="text" name="nome" placeholder="Nome"/>
							</div>
						</div>
						<div class="form-group form-group-lg">
							<label class="col-sm-3 col-md-2 text-right control-label" for="email">E-mail</label>
							<div class="col-sm-9 col-md-10">
								<input class="form-control" type="mail" name="email" placeholder="E-mail"/>
							</div>
						</div>
						<div class="form-group form-group-lg">
							<label class="col-sm-3 col-md-2 text-right control-label" for="assunto">Assunto</label>
							<div class="col-sm-9 col-md-10">
								<input class="form-control" type="text" name="assunto" placeholder="Assunto"/>
							</div>
						</div>
						<div class="form-group form-group-lg">
							<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
								<textarea class="form-control" rows="3" placeholder="mensagem..."></textarea>
							</div>
						</div>
						<div class="form-group form-group-lg">
							<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
								<input type="submit" value="Submit" class="btn btn-default"/>
							</div>
						</div>
					</form>
				</div>
				<?php include('sidebar.php'); ?>
			</div>
		</div>		
		
<?php include('footer.php'); ?>