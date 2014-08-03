<?php
	$page_title = "Pioverá | Home";
	$body_id = $menu_active = "home";
	include('head.php');
	include('menu.php');
?>
		
	<div class="container" id="destaques">
		<div class="row">
			<div class="col-sm-12">
			
			
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
					
						<div class="item active">
							<img class="hidden-xs" src="http://placehold.it/1170x500" alt="destaque1" />
							<img class="visible-xs" src="http://placehold.it/800x1000" alt="destaque1" />
							<div class="carousel-caption">
								<h3>Título do destaque 1</h3>
								<p>Descrição do destaque 1</p>
							</div>
						</div>
						
						<div class="item">
							<img class="hidden-xs" src="http://placehold.it/1170x500" alt="destaque2" />
							<img class="visible-xs" src="http://placehold.it/800x1000" alt="destaque2" />
							<div class="carousel-caption">
								<h3>Título do destaque 2</h3>
								<p>Descrição do destaque 2</p>
							</div>
						</div>
						
						<div class="item">
							<img class="hidden-xs" src="http://placehold.it/1170x500" alt="destaque3" />
							<img class="visible-xs" src="http://placehold.it/800x1000" alt="destaque3" />
							<div class="carousel-caption">
								<h3>Título do destaque 3</h3>
								<p>Descrição do destaque 3</p>
							</div>
						</div>
						
					</div>
					
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			        
				</div>
				
				
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-6" id="servicos">
				<h2>Nossos serviços</h2>
				<ul>
					<li class=""><a href="servico-n.html">Serviço 1</a></li>
					<li class=""><a href="servico-n.html">Serviço 2</a></li>
					<li class=""><a href="servico-n.html">Serviço 3</a></li>
					<li class=""><a href="servico-n.html">Serviço 4</a></li>
					<li class=""><a href="servico-n.html">Serviço 5</a></li>
					<li class=""><a href="servico-n.html">Serviço 6</a></li>
				</ul>
			</div>
			<div class="col-sm-6" id="contato">
				<h2>Entre em contato</h2>
				<form class="form-horizontal" role="form" action="" method="">
					<div class="form-group form-group-sm">
						<label class="col-sm-3 col-md-2 text-right control-label" for="nome">Nome</label>
						<div class="col-sm-9 col-md-10">
							<input class="form-control" type="text" name="nome" placeholder="Nome"/>
						</div>
					</div>
					<div class="form-group form-group-sm">
						<label class="col-sm-3 col-md-2 text-right control-label" for="email">E-mail</label>
						<div class="col-sm-9 col-md-10">
							<input class="form-control" type="mail" name="email" placeholder="E-mail"/>
						</div>
					</div>
					<div class="form-group form-group-sm">
						<label class="col-sm-3 col-md-2 text-right control-label" for="assunto">Assunto</label>
						<div class="col-sm-9 col-md-10">
							<input class="form-control" type="text" name="assunto" placeholder="Assunto"/>
						</div>
					</div>
					<div class="form-group form-group-sm">
						<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
							<textarea class="form-control" rows="3" placeholder="mensagem..."></textarea>
						</div>
					</div>
					<div class="form-group form-group-sm">
						<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
							<input type="submit" value="Submit" class="btn btn-default"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		
<?php include('footer.php'); ?>