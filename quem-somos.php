<?php
	$page_title = "Pioverá | Quem somos";
	$body_id = $menu_active = "quemsomos";
	include('head.php');
	include('menu.php')
?>
		
		<div class="container page-header" id="page-header">
			<div class="row">
				<div class="col-sm-12">
					<h1>Quem Somos</h1>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8" id="conteudo">
					<h2>Se precisar de um subtítulo, ele vem aqui.</h2>
					<p class="lead">"Tendo em conta as condições de que dispõe e na medida do possível, é a natureza que faz sempre as coisas mais belas e melhores."</p>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
					<div class="row">
						<img class="col-sm-4 img-circle img-responsive" src="http://placehold.it/400x400" alt="Leo" />
						<div class="col-sm-8">
							<h3>Leonardo Aquino</h3>
							<p class="lead">"O génio e a natureza fizeram uma aliança eterna: o que o primeiro promete, a segunda certamente realiza."</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							<h3 class="text-right">Ricardo Carelli</h3>
							<p class="lead text-right">"O mundo tornou-se perigoso, porque os homens aprenderam a dominar a natureza antes de se dominarem a si mesmos."</p>
						</div>
						<img class="col-sm-4 img-circle img-responsive" src="http://placehold.it/400x400" alt="Ricardo" />
					</div>
					
				</div>
				<?php include('sidebar.php'); ?>
			</div>
		</div>
		
<?php include('footer.php'); ?>