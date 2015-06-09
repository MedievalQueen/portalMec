<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("_header.html") ?>
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
			Matérias: <br/>
			<table style="width:100%">
			  <tr>
			    <td><input type="checkbox">Matemática</td>
			    <td>
				<select>
				<option value="disc" selected>Disciplina</option>
				<option value="#">Álgebra</option>
				<option value="#">...</option>
				<option value="#">...</option>
				</select> +
			   </td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">Biologia</td>
			    <td>
				<select>
				<option value="disc" selected>Disciplina</option>
				<option value="#">Plantas</option>
				<option value="#">...</option>
				<option value="#">...</option>
				</select> +
			   </td>		
			  </tr>
			<tr>
			    <td><input type="checkbox">História</td>
			    <td>
				<select>
				<option value="disc" selected>Disciplina</option>
				<option value="#">do Brasil</option>
				<option value="#">...</option>
				<option value="#">...</option>
				</select> +
			   </td>		
			  </tr>
			</table>
			<br><br>
			<table>
			  <tr>
			    <td>
				<select>
			  	<option value="materia" selected>Matéria</option>
			  	<option value="#">Matemática</option>
			  	<option value="#">...</option>
			  	<option value="#">...</option>
			  	</select>
			    </td>
			    <td>
				<select>
				<option value="disc" selected>Disciplina</option>
				<option value="#">Álgebra</option>
				<option value="#">...</option>
				<option value="#">...</option>
				</select> 
			    </td>		
			  </tr>
			</table>
	
            		 <hr>
			Ano escolar: <br/>
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
			Ano de Publicação:<br> 
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
			Conteúdo: <br/>
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
			
			<br/><br/>          
	   		<br/><button type="submit" class="btn btn-default">Pesquisar</button>

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
