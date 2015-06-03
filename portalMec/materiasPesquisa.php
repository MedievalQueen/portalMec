<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("_header.html") ?>
  </head>

  <body>

    <?php
        $G_navbar_name = "Matérias";
        $G_navbar_image = "images/banner-materias.png";
        include("_navbar.php")
    ?>

    <div class="container-fluid">
		<div class="col-sm-2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active"><a href="#">Artes</a></li>
              <li><a href="#">Biologia</a></li>
              <li><a href="#">Educação Física</a></li>
              <li><a href="#">Espanhol</a></li>
              <li><a href="#">Filosofia</a></li>
              <li><a href="#">Física</a></li>
              <li><a href="#">Geografia</a></li>
              <li><a href="#">História</a></li>
              <li><a href="#">Inglês</a></li>
			  <li><a href="#">Literatura</a></li>
			  <li><a href="matematica.php">Matemática</a></li>
			  <li><a href="#">Meio Ambiente</a></li>
              <li><a href="#">Português</a></li>
              <li><a href="#">Química</a></li>
              <li><a href="#">Sociologia</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-8">

			<h1>Matérias</h1>
			<p>Todas Matérias</p><br/>
			<div class="row">
				<div class="col-xs-6 col-md-4">
					<div class="thumbnail">
					<img src="images/matematica.jpg" alt="...">
					<div class="caption">
					<h3>Matemática</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
					</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-4">
				<div class="thumbnail">
				<img src="images/quimica.png" alt="...">
				<div class="caption">
					<h3>Quimica</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
				</div>
				</div>
				</div>
				<div class="col-xs-6 col-md-4">
				<div class="thumbnail">
				<img src="images/historia.jpeg" alt="...">
				<div class="caption">
					<h3>História</h3>
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
		</div><!-- col-sm-8 -->
		<div class="col-sm-2">
          <div class="well sidebar-nav">
		  <p>Pesquisa com filtros</p>
            <ul class="nav nav-list">

			<select>
			<option value="materia" selected>Matéria</option>
			<option value="#">Matemática</option>
			<option value="#">...</option>
			<option value="#">...</option>
			</select>
              <li><br/>Ano: <br/>1º<input type="checkbox">4º<input type="checkbox"><br/>2º<input type="checkbox">5º<input type="checkbox"><br/>3º<input type="checkbox">6º<input type="checkbox"></li>
            <br/>  <select>
			<option value="disc" selected>Disciplina</option>
			<option value="#">Álgebra</option>
			<option value="#">...</option>
			<option value="#">...</option>
			</select> <br/><br/>
			<select>
			<option value="materia" selected>Conteúdo</option>
			<option value="#">Fotos</option>
			<option value="#">Imagens</option>
			<option value="#">Vídeos</option>
			</select>            </ul><br/>
			<button type="submit" class="btn btn-default">Pesquisar</button>
          </div><!--/.well -->
        </div><!--/span-->
	</div><!-- /container -->




    <?php include("_footer.html") ?>

  </body>
</html>
