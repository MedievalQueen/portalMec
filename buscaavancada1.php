<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("_header.html") ?>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/select2.full.js"></script>
    <link href="css/select2.min.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript">

		$.fn.select2.amd.require(
			["select2/core", "select2/utils", "select2/compat/matcher"],
			function (Select2, Utils, oldMatcher) {
		 
		  var $basicMultiple = $(".js-example-basic-multiple");
		  var $limitMultiple = $(".js-example-basic-multiple-limit");

		  $basicMultiple.select2();
		  $basicMultiple.select2({ width: '80%' });
		  $limitMultiple.select2({
			maximumSelectionLength: 2
		  });
		});
	</script>
  </head>

  <body>

    <?php
        $G_navbar_name = "Busca Avançada";
        $G_navbar_image = "images/banner-materias.png";
        include("_navbar.php")
    ?>

    <div class="container-fluid">
	<div class="col-sm-4">
 		<div class="well sidebar-nav">
			 <h2> <p>Pesquisa Avançada</p></h2>	
			<hr>
			<table style="width:100%">
			  <tr>
			    <td>Todas estas palavras:</td>
			    <td><input type="text" name=""></td>		
			  </tr>
			  <tr>
			    <td>A frase exata:</td>
			    <td><input type="text" name=""></td>		
			  </tr>
			  <tr>
			    <td>Qualquer uma destas palavras:</td>
			    <td><input type="text" name=""></td>		
			  </tr>
			  <tr>
			    <td>Nenhuma destas palavras:</td>
			    <td><input type="text" name=""></td>		
			  </tr>
			  <tr>
			    <td></td>
			    <td align="right"><br><input type="button" name="" value="Buscar"></td>		
			  </tr>
			</table>
			<hr>
			<table style="width:100%">
			  <tr>
				 <td>Matérias</td><td>Disciplinas</td>
			  </tr>
			  <tr>
				 <td><br/></td><td></td>
			  </tr>
			  <tr>
			    <td><input type="checkbox">Matemática</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">Conjuntos</option>
					<option value="">Soma</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="AL">Álgebra</option>
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">Biologia</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">Plantas</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">História</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">História do Brasil</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			  <tr>
			    <td><input type="checkbox">Língua Portuguesa</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">...</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			  <tr>
			    <td><input type="checkbox">Geografia</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">...</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			   <tr>
			    <td><input type="checkbox">Ciências</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">...</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			  <tr>
			    <td><input type="checkbox">Educação Física</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">...</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>
			  <tr>
			    <td><input type="checkbox">Inglês</td>
			    <td>
				<select class="js-example-basic-multiple" multiple="multiple">
				  <optgroup label="Básico">
					<option value="">...</option>
					<option value="">...</option>
				  </optgroup>
				  <optgroup label="Avançada">
					<option value="">...</option>
				  </optgroup>
				</select>
			   </td>		
			  </tr>	  
			</table>		
	
            		 <hr>
			Ano escolar: <br/> <br/>
			<table style="width:100%">
			  <tr>
			    <td><input type="checkbox">1º</td>
			    <td><input type="checkbox">4º</td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">2º</td>
			    <td><input type="checkbox">5º</td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">3º</td>
			    <td><input type="checkbox">6º</td>		
			  </tr>
			</table>
			<hr>
			Ano de Publicação:<br>  <br/>
			<table style="width:100%">
			  <tr>
			    <td><input type="radio" name="ano" value="single" checked>Ano:</td>
			    <td> <input type="text" name="ano1" size="8"></td>		
			  </tr>
 			  <tr>
			    <td><input type="radio" name="ano" value="range">Intervalo:</td>
			    <td> <input type="text" name="ano2" size="8"> - <input type="text" name="ano2" size="8"></td>		
			  </tr>
			</table>	 
			<hr>
			Conteúdo: <br/> <br/>
			<table style="width:100%">
			  <tr>
			    <td><input type="checkbox">Fotos</td>
			    <td><input type="checkbox">Imagens</td>	
			    <td><input type="checkbox">Vídeos</td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">Áudio</td>
			    <td><input type="checkbox">Textos</td>		
			  </tr>
			</table>
			
			<hr>
			Conteúdo: <br/> <br/>
			<table style="width:100%">
			   <tr>
			    <td>Mídia </td>
			    <td></td>	
			    <td></td>
			   </tr>
			  <tr>
			    <td><input type="checkbox">Fotos</td>
			    <td><input type="checkbox">Imagens</td>	
			    <td><input type="checkbox">Vídeos</td>		
			  </tr>
			  <tr>
			    <td><input type="checkbox">Áudio</td>
			    <td><input type="checkbox">Apresentações Multimídia</td>	
			    <td><input type="checkbox">Apps</td>		
			  </tr>
			<tr>
			    <td><br/></td>
			    <td></td>	
			    <td></td>
			</tr>
			<tr>
			    <td>Textos</td>
			    <td></td>	
			    <td></td>
			   </tr>
			<tr>
			    <td><input type="checkbox">Anais</td>
			    <td><input type="checkbox">Artigos Web</td>	
			    <td><input type="checkbox">Capítulos de Livros</td>	
			</tr>
			<tr>
			    <td><input type="checkbox">Dissertações</td>
			    <td><input type="checkbox">Livros</td>	
			    <td><input type="checkbox">Monografias</td>	
			</tr>
			<tr>
			    <td><input type="checkbox">Periódicos</td>
			    <td><input type="checkbox">Revistas</td>	
			    <td><input type="checkbox">Teses</td>	
			</tr>
			<tr>
			    <td><input type="checkbox">Todos</td>	
			</tr>
			<tr>
			    <td><br/></td>
			    <td></td>	
			    <td></td>
			</tr>
			<tr>
			    <td>Outros</td>
			    <td></td>	
			    <td></td>
			   </tr>
			<tr>
			    <td><input type="checkbox">Planos de Aula</td>
			</tr>
			<tr>
			    <td></td>
			    <td></td>	
			    <td><button type="submit" class="btn btn-default">Pesquisar</button></td>
			   </tr>
			<tr>
			</table>

		</div><!--/.well -->
        </div><!--/span col sm-4-->	
        <div class="col-sm-8">
	<div class="container"><select>
			<option value="#" selected>Resultados por Página</option>
			<option value="#">10</option>
			<option value="#">25</option>
			<option value="#">50</option>
			</select> 
			<select>
			<option value="#" selected>Ordenar por</option>
			<option value="#">Relevância</option>
			<option value="#">Mais novos</option>
			<option value="#">Mais velhos</option>
			</select>
	</div></br>
	<div class="container">
		<div class="row">
    			<div class="col-md-3">
    			  <a href="images/16751.jpg" class="thumbnail">
        			<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>    
        			<img src="images/16751.jpg" alt="Pulpit Rock" width="284" height="213">
      			  </a>
   		 	</div>
    			<div class="col-md-6">
      				<div class="col-md-12">
           		A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
      				</div>
      				<div class="col-md-12">
               			  <a href="#" class="btn btn-primary">Download</a>
               		     	  <a href="#" class="btn btn-info">Images</a>
      				</div>
    			</div>
  	   	</div>
	    </div>
<div class="container">
		<div class="row">
    			<div class="col-md-3">
    			  <a href="images/23906.jpg" class="thumbnail">
        			<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>    
        			<img src="images/23906.jpg" alt="Pulpit Rock" width="284" height="213">
      			  </a>
   		 	</div>
    			<div class="col-md-6">
      				<div class="col-md-12">
           		A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
      				</div>
      				<div class="col-md-12">
               			  <a href="#" class="btn btn-primary">Download</a>
               		     	  <a href="#" class="btn btn-info">Images</a>
      				</div>
    			</div>
  	   	</div>
	    </div>
		<div class="container">
		<div class="row">
    			<div class="col-md-3">
    			  <a href="images/17094.jpg" class="thumbnail">
        			<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>    
        			<img src="images/17094.jpg" alt="Pulpit Rock" width="284" height="213">
      			  </a>
   		 	</div>
    			<div class="col-md-6">
      				<div class="col-md-12">
           		A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
      				</div>
      				<div class="col-md-12">
               			  <a href="#" class="btn btn-primary">Download</a>
               		     	  <a href="#" class="btn btn-info">Images</a>
      				</div>
    			</div>
  	   	</div>
	    </div>			
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
		
	</div><!-- /container -->
	

    <?php include("_footer.html") ?>

  </body>
</html>
