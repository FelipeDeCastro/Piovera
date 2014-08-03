<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
	
		<!-- Botão da versão mobile -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index">Pioverá</a>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
			
				<li<?php if( $menu_active == 'home' ){ echo ' class="active"';} ?> ><a href="index">Home</a></li>
				<li<?php if( $menu_active == 'quemsomos' ){ echo ' class="active"';} ?> ><a href="quem-somos">Quem somos</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nossos serviços <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li<?php if( $menu_active == 'servico' ){ echo ' class="active"'; } ?> ><a href="servico">Serviço 1</a></li>
						<li<?php if( $menu_active == 'servico' ){ echo ' class="active"'; } ?> ><a href="servico">Serviço 2</a></li>
						<li<?php if( $menu_active == 'servico' ){ echo ' class="active"'; } ?> ><a href="servico">Serviço 2</a></li>
					</ul>
				</li>
				
				<li<?php if( $menu_active == 'contato' ){ echo ' class="active"'; } ?> ><a href="contato">Contato</a></li>
				
			</ul>
		</div>

	</div>
</nav>