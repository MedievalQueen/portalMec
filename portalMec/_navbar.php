<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Portal nome</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
		<div class="navbar-form navbar-right">
            <a class="btn btn-success" href="#" role="button"> Login </a>
		<a class="btn btn-primary" href="#" role="button">Cadastre-se &raquo;</a>
		</div>
          <form class="navbar-form" action="resultado-busca.php" method="GET">
            <div class="input-group" id="typeahead">
                <input id="input" type="text" placeholder="Pesquisar" class="form-control">
            </div>
          </form>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-image: url('<?php echo $G_navbar_image?>');">
      <div class="container">
        <h1> <?php echo $G_navbar_name?> </h1>
      </div>
    </div>

    <div class="submenu"><div class="container-fluid">
    <div class="col-sm-6">
    </div>
    <div class="col-sm-6">
	<nav class="navbar navbar-default">
    		<ul class="nav navbar-nav">
    		<li><a href="index.php">Home</a></li>
    		<li><a href="materiasPesquisa.php">Matérias</a></li>
    		
    		</ul>
    		<form class="navbar-form navbar-right" role="search" action="busca.php">
    			<div class="form-group">
    			<input type="text" class="form-control" placeholder="Busca">
    			</div>
    			<button type="submit" class="btn btn-default">Pesquisar</button></br>
			<a href="buscaavancada.php">Busca Avançada</a>
    		</form>
	</nav>
    </div>
    </div></div>
