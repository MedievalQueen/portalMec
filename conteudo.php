<!DOCTYPE html>
<html><head>
    <?php include("_header.html") ?>
</head><body>
    <?php
        $G_navbar_name = "Conteúdo";
        $G_navbar_image = "images/banner-conteudo.jpg";
        include("_navbar.php")
    ?>



    <div class="container-fluid">
		<div class="col-sm-2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
	      <li class="nav-header">Mídia</li>
              <li class="nav-header"><a href=""> Imagens </a></li>
              <li class="active"><a href="#"> Videos </a></li>
	      <li><a href="#">Apresentações Multimídia</a></li>
		<li><a href="#">Áudio</a></li>
		<li><a href="#">Apps</a></li>
              <hr>
	      <li class="nav-header">Textos</li>
              <li><a href="#">Anais</a></li>
              <li><a href="#">Artigos Web</a></li>
              <li><a href="#">Capítulos de Livros</a></li>
		<li><a href="#">Dissertações</a></li>
		<li><a href="#">Livros</a></li>
		<li><a href="#">Monografias</a></li>
		<li><a href="#">Periódicos</a></li>
		<li><a href="#">Revistas</a></li>
		<li><a href="#">Teses</a></li>
		<li><a href="#">Todos</a></li>
		<hr>
		<li class="nav-header">Outros</li>
		<li><a href="#">Planos de Aula</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-10">

			<div class="row">
				<div class="col-xs-6 col-md-4">
					<div class="thumbnail">
					<img src="images/16751.jpg" alt="...">
					<div class="caption">
					<h3>Gif1</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
				<div class="thumbnail">
				<img src="images/23906.jpg" alt="...">
				<div class="caption">
					<h3>Img1</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				</div>
				</div>
				<div class="col-xs-6 col-md-4">
				<div class="thumbnail">
				<img src="images/17094.jpg" alt="...">
				<div class="caption">
					<h3>Gif2</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				</div>
				</div>
			</div>	<!--fim de row -->
			<nav>
			<ul class="pagination">
				<li>
				<a href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
				</a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
				<a href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
				</a>
				</li>
			</ul>
			</nav>
			<br/>
		</div><!-- col-sm-9 -->
	</div><!-- /container -->


    <?php include("_footer.html") ?>
  </body>
</html>
