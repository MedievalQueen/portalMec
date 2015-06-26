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

	 <script type="text/javascript">
		$(document).ready(function() {
			var parentDivs = $('#nestedAccordion div'),
			childDivs = $('#nestedAccordion h3').siblings('div');
			
			$('#nestedAccordion h2').click(function(){
				//		parentDivs.slideUp();
				if($(this).next().is(':hidden')){
					$(this).next().slideDown();
				}else{
					$(this).next().slideUp();
				}
			});
			$('#nestedAccordion h3').click(function(){
				//		childDivs.slideUp();
				if($(this).next().is(':hidden')){
					$(this).next().slideDown();
				}else{
					$(this).next().slideUp();
				}
			});
		});
	</script> 
	<style type="text/css">
		#nestedAccordion{
			width:100%;
		}
		#nestedAccordion h2, #nestedAccordion h3, 
		#nestedAccordion div, #nestedAccordion ol, 
		#nestedAccordion li{
			/* reset styles for accordion */
			margin:0;
			padding:0;
			font-size:1em;
			font-weight:normal;
			list-style:none;
		}
		#nestedAccordion div{
			color:#555;/*#555 #003300*/
			overflow:hidden;
			display:none;
		}

		#nestedAccordion h2{
			cursor:pointer;
			color:#fff;
			font-size:1.1em;
			moz-border-radius: 5px 5px 0 0;
			-webkit-border-radius: 5px 5px 0 0;
			border-radius: 5px 5px 0 0;
			padding:3px;
			margin-top:5px;
			background-color: #529652;
			background-image: -webkit-gradient(linear, left top, left bottom, from(#4B8CFF), to(#447FE8));
			background-image: -webkit-linear-gradient(top, #4B8CFF, #447FE8);/*#4B8CFF, #447FE8*/
			background-image: -moz-linear-gradient(top, #4B8CFF, #447FE8);
			background-image: -ms-linear-gradient(top, #4B8CFF, #447FE8);
			background-image: -o-linear-gradient(top, #4B8CFF, #447FE8);
			background-image: linear-gradient(to bottom, #4B8CFF, #447FE8);
			background-image: url("arrow.ico");
    		background-repeat: no-repeat;
    		background-position: right bottom;
		}
		#nestedAccordion h3{
			cursor:pointer;
			padding:4px;
			color: #666;
			text-shadow: 0 1px 0 rgba(255, 255, 255, .5);
			background-color: #f5f5f5;
			background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#ededed));
			background-image: -webkit-linear-gradient(top, #f5f5f5, #ededed);
			background-image: -moz-linear-gradient(top, #f5f5f5, #ededed);
			background-image: -ms-linear-gradient(top, #f5f5f5, #ededed);
			background-image: -o-linear-gradient(top, #f5f5f5, #ededed);
			background-image: linear-gradient(to bottom, #f5f5f5, #ededed);

		}
		#nestedAccordion h3:hover{
			color:#000;
		}
		#nestedAccordion h3 + div{
			display:none;
			background-color:#F5F5F5;
			padding:5px 5px 5px 30px;
		}
		#nestedAccordion li:hover{
			color:#000;
			cursor:pointer;
		}
		#nestedAccordion h2 +div.aberto{
			display:inherit;
		}
	</style>
	<style type="text/css">
		.starRating:not(old){
		  display        : inline-block;
		  width          : 7.5em;
		  height         : 1.5em;
		  overflow       : hidden;
		  vertical-align : bottom;
		}

		.starRating:not(old) > input{
		  margin-right : -100%;
		  opacity      : 0;
		}

		.starRating:not(old) > label{
		  display         : block;
		  float           : right;
		  position        : relative;
		  background      : url('star-off.svg');
		  background-size : contain;
		}

		.starRating:not(old) > label:before{
		  content         : '';
		  display         : block;
		  width           : 1.5em;
		  height          : 1.5em;
		  background      : url('star-on.svg');
		  background-size : contain;
		  opacity         : 0;
		  transition      : opacity 0.2s linear;
		}

		.starRating:not(old) > label:hover:before,
		.starRating:not(old) > label:hover ~ label:before,
		.starRating:not(:hover) > :checked ~ label:before{
		  opacity : 1;
		}
	</style>
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
			 <h2> Busca Avançada</h2>	

			<div id="nestedAccordion">
				<h2>Seleção Atual</h2>
				 <div>
				 	
				 </div>
			    <h2>Matérias</h2>
			    <div class='aberto'>
			        <h3>Matemática</h3>
			         <div>	
							<select class="js-example-basic-multiple" multiple="multiple">
								<option value="">Todos</option>
							  <optgroup label="Básico">
								<option value="">Conjuntos</option>
								<option value="">Soma</option>
							  </optgroup>
							  <optgroup label="Avançada">
								<option value="AL">Álgebra</option>
								<option value="">...</option>
							  </optgroup>
							</select>
			         </div>
			         <h3>Biologia</h3>
			         <div>
							<select class="js-example-basic-multiple" multiple="multiple">
								<option value="">Todos</option>
							  <optgroup label="Básico">
								<option value="">Plantas</option>
								<option value="">...</option>
							  </optgroup>
							  <optgroup label="Avançada">
								<option value="">...</option>
							  </optgroup>
							</select>
			         </div>
			         <h3>História</h3>
			         <div>
			         	<select class="js-example-basic-multiple" multiple="multiple">
			         		<option value="">Todos</option>
						  <optgroup label="Básico">
							<option value="">História do Brasil</option>
							<option value="">...</option>
						  </optgroup>
						  <optgroup label="Avançada">
							<option value="">...</option>
						  </optgroup>
						</select>
			         </div>
			         <h3>Língua Portuguesa</h3>
			         <div>
			         	<select class="js-example-basic-multiple" multiple="multiple">
			         		<option value="">Todos</option>
						  <optgroup label="Básico">
							<option value="">...</option>
							<option value="">...</option>
						  </optgroup>
						  <optgroup label="Avançada">
							<option value="">...</option>
						  </optgroup>
						</select>
			         </div>
			         <h3>Geografia</h3>
			         <div>
			         	<select class="js-example-basic-multiple" multiple="multiple">
			         		<option value="">Todos</option>
						  <optgroup label="Básico">
							<option value="">...</option>
							<option value="">...</option>
						  </optgroup>
						  <optgroup label="Avançada">
							<option value="">...</option>
						  </optgroup>
						</select>
			         </div>
			         <h3>Ciências</h3>
			         <div>
			         	<select class="js-example-basic-multiple" multiple="multiple">
			         		<option value="">Todos</option>
						  <optgroup label="Básico">
							<option value="">...</option>
							<option value="">...</option>
						  </optgroup>
						  <optgroup label="Avançada">
							<option value="">...</option>
						  </optgroup>
						</select>
			         </div>
			         <h3>Educação Física</h3>
			         <div>
			         	<select class="js-example-basic-multiple" multiple="multiple">
			         		<option value="">Todos</option>
						  <optgroup label="Básico">
							<option value="">...</option>
							<option value="">...</option>
						  </optgroup>
						  <optgroup label="Avançada">
							<option value="">...</option>
						  </optgroup>
						</select>
			         </div>
			         <h3>Inglês</h3>
			         <div>
			         	<select class="js-example-basic-multiple" multiple="multiple">
			         		<option value="">Todos</option>
						  <optgroup label="Básico">
							<option value="">...</option>
							<option value="">...</option>
						  </optgroup>
						  <optgroup label="Avançada">
							<option value="">...</option>
						  </optgroup>
						</select>
			         </div>
			    </div><!--fim materias -->
			    <h2>Conteúdo - Tipo 1</h2>
			    <div class='aberto'>
			    	<table style="width:100%">
					   <tr>
					    <td><p>Mídia</p> </td>
					    <td></td>	
					   </tr>
					  <tr>
					    <td><input type="checkbox">Fotos</td>
					    <td><input type="checkbox">Imagens</td>	
					  </tr>
					  <tr>
					    <td><input type="checkbox">Áudio</td>
					    <td><input type="checkbox">Vídeos</td>	
					</tr>
					<tr>
					    <td><input type="checkbox">Apresentações Multimídia</td>	
					    <td><input type="checkbox">Apps</td>		
					  </tr>
					<tr>
					    <td><hr></td>
					    <td></td>	
					</tr>
					<tr>
					    <td><p>Textos</p></td>
					    <td></td>	
					   </tr>
					<tr>
					    <td><input type="checkbox">Anais</td>
					    <td><input type="checkbox">Artigos Web</td>	
					</tr>
					<tr>
						<td><input type="checkbox">Capítulos de Livros</td>	
					    <td><input type="checkbox">Dissertações</td>
					</tr>
					<tr>
					    <td><input type="checkbox">Livros</td>	
					    <td><input type="checkbox">Monografias</td>	
					</tr>
					<tr>
					    <td><input type="checkbox">Periódicos</td>
					    <td><input type="checkbox">Revistas</td>	
					</tr>
					<tr>
						  <td><input type="checkbox">Teses</td>	
					</tr>
					<tr>
					    <td><hr></td>
					    <td></td>	
					    <td></td>
					</tr>
					<tr>
					    <td><p>Outros</p></td>
					    <td></td>	
					   </tr>
					<tr>
					    <td><input type="checkbox">Planos de Aula</td>
					</tr>
					</table>
			    </div>
			    <h2>Conteúdo - Tipo 2</h2>
			    <div>
			    	<h3>Mídia</h3>
			    		<div>
			    			<table>
			    			<tr>
							    <td><input type="checkbox">Fotos</td>
							    <td><input type="checkbox">Imagens</td>	
							  </tr>
							  <tr>
							  	<td><input type="checkbox">Vídeos</td>
							    <td><input type="checkbox">Áudio</td>
							</tr>
							<tr>
							    <td><input type="checkbox">Apresentações Multimídia</td>	
							    <td><input type="checkbox">Apps</td>		
							  </tr>
							</table>
			    		</div>
			    		<h3>Textos</h3>
			    		<div>
			    			<table>
			    			<tr>
							     <td><input type="checkbox">Anais</td>
							    <td><input type="checkbox">Artigos Web</td>		
							  </tr>
							  <tr>
							  	<td><input type="checkbox">Capítulos de Livros</td>
							    <td><input type="checkbox">Dissertações</td>
							</tr>
							<tr>
							    <td><input type="checkbox">Livros</td>	
							    <td><input type="checkbox">Monografias</td>		
							  </tr>
							  <tr>
							    <td><input type="checkbox">Periódicos</td>	
							    <td><input type="checkbox">Revistas</td>		
							  </tr>
							  <tr>
							    <td><input type="checkbox">Teses</td>	
							    <td></td>
							  </tr>
							</table>
			    		</div>
			    		<h3>Outros</h3>
			    		<div>
			    			<input type="checkbox">Planos de Aula
			    		</div>		    	
			    </div>
			    <h2>Ano escolar</h2>
			    <div>
			        <table style="width:100%">
					  <tr>
					    <td><input type="checkbox">1º</td>
					    <td><input type="checkbox">5º</td>		
					  </tr>
					<tr>
					    <td><input type="checkbox">2º</td>
					    <td><input type="checkbox">6º</td>		
					  </tr>
					<tr>
					    <td><input type="checkbox">3º</td>
					    <td><input type="checkbox">7º</td>		
					  </tr>
					  <tr>
					    <td><input type="checkbox">4º</td>
					    <td><input type="checkbox">8º</td>		
					  </tr>
					</table>	
			    </div>
			     <h2>Ano de Publicação</h2>
			    <div>
						<input type="radio" name="ano" value="single" checked>Ano:<br/>
						<input type="text" name="ano1" size="8">
						<br/>
						<input type="radio" name="ano" value="range">Intervalo:<br/>
						<input type="text" name="ano2" size="8"> - <input type="text" name="ano2" size="8">
			    </div>
			</div><!-- fim div id="nestedAccordion"-->	

			<div id="nestedAccordion">
			    <h2>Pesquisa Avançada</h2>
			    <div>
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
					    <td align="right"><br><button type="submit" class="btn btn-default">Pesquisar</button></td>		
					  </tr>
					</table>
			    </div>
			 </div>		

		</div><!--/.well -->
        </div><!--/span col sm-4-->	
        <div class="col-sm-8">

        	<nav class="navbar navbar-default">
				<div class="container-fluid" >

					Mostrando resultados 1-25 de 596,856 
						<select>
						<option value="#" selected>Resultados por Página</option>
						<option value="#">10</option>
						<option value="#">25</option>
						<option value="#">50</option>
						</select> 
						<select>
						<option value="#" selected>Ordenar por</option>
						<option value="#">Autores</option>
						<option value="#">Data de publicação</option>
						<option value="#">Mais novos</option>
						<option value="#">Mais velhos</option>
						<option value="#">Relevância</option>
						<option value="#">Tipo</option>
						<option value="#">Título</option>
						</select>
				
				</div>
			</nav>
			<br />
			
			<div class="container-fluid">
				<div class="row">
		    			<div class="col-sm-3">
		    			  <a href="images/16751.jpg" class="thumbnail">
		        			<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>    
		        			<img src="images/16751.jpg" alt="Pulpit Rock" width="284" height="213">
		      			  </a>
		   		 		</div>
		    			<div class="col-sm-9">
		      				<div class="col-sm-12">
		           		A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
		      				</div>
		      				<div class="col-sm-12">
					<div align="right"><a href="objeto.php" class="btn btn-primary">Ver mais...</a></div>
 				<br/>
				<table class="table ">
					<tr>
						<td>Avaliações:</td><td>Postado por:</td><td>Visualizações:</td>
					</tr>
					<tr>
						<td>
						      <span class="starRating">
						        <input id="rating5" type="radio" name="rating" value="5" disabled>
						        <label for="rating5">5</label>
						        <input id="rating4" type="radio" name="rating" value="4" checked disabled>
						        <label for="rating4">4</label>
						        <input id="rating3" type="radio" name="rating" value="3" disabled>
						        <label for="rating3">3</label>
						        <input id="rating2" type="radio" name="rating" value="2" disabled>
						        <label for="rating2">2</label>
						        <input id="rating1" type="radio" name="rating" value="1" disabled>
						        <label for="rating1">1</label>
						      </span>
						      ()
						</td>
						<td> <a href="#" class="btn btn-info">Autor</a> Há 3 anos</td>
						<td>333</td>
					</tr>
				</table>	               			
		               		      
		      				</div>
		      			</div>
		      	</div>
	    	</div>
			<div class="container-fluid">
				<div class="row">
	    			<div class="col-sm-3">
	    			  <a href="images/23906.jpg" class="thumbnail">
	        			<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>    
	        			<img src="images/23906.jpg" alt="Pulpit Rock" width="284" height="213">
	      			  </a>
	   		 		</div>
	    			<div class="col-sm-9">
		      				<div class="col-sm-12">
		           		A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
		      				</div>
		      				<div class="col-sm-12">
					<div align="right"><a href="objeto.php" class="btn btn-primary">Ver mais...</a></div>
 				<br/>
				<table class="table ">
					<tr>
						<td>Avaliações:</td><td>Postado por:</td><td>Visualizações:</td>
					</tr>
					<tr>
						<td>
							 
						      <span class="starRating">
						        <input id="rating5" type="radio" name="rating1" value="5" disabled>
						        <label for="rating5">5</label>
						        <input id="rating4" type="radio" name="rating1" value="4" disabled>
						        <label for="rating4">4</label>
						        <input id="rating3" type="radio" name="rating1" value="3" checked disabled>
						        <label for="rating3">3</label>
						        <input id="rating2" type="radio" name="rating1" value="2" disabled>
						        <label for="rating2">2</label>
						        <input id="rating1" type="radio" name="rating1" value="1" disabled>
						        <label for="rating1">1</label>
						      </span>
						      ()
						</td>
						<td> <a href="#" class="btn btn-info">Autor</a> Há 3 anos</td>
						<td>333</td>
					</tr>
				</table>	               			
		               		      
		      				</div>
		      			</div>
		      	</div>
	    	</div>
			<div class="container-fluid">
				<div class="row">
		    			<div class="col-sm-3">
		    			  <a href="images/17094.jpg" class="thumbnail">
		        			<p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>    
		        			<img src="images/17094.jpg" alt="Pulpit Rock" width="284" height="213">
		      			  </a>
		   		 	</div>
		    			<div class="col-sm-9">
		      				<div class="col-sm-12">
		           		A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
		      				</div>
		      				<div class="col-sm-12">
					<div align="right"><a href="objeto.php" class="btn btn-primary">Ver mais...</a></div>
 				<br/>
				<table class="table ">
					<tr>
						<td>Avaliações:</td><td>Postado por:</td><td>Visualizações:</td>
					</tr>
					<tr>
						<td>
							 
						      <span class="starRating">
						        <input id="rating5" type="radio" name="rating2" value="5" disabled>
						        <label for="rating5">5</label>
						        <input id="rating4" type="radio" name="rating2" value="4" disabled>
						        <label for="rating4">4</label>
						        <input id="rating3" type="radio" name="rating2" value="3" checked disabled>
						        <label for="rating3">3</label>
						        <input id="rating2" type="radio" name="rating2" value="2" disabled>
						        <label for="rating2">2</label>
						        <input id="rating1" type="radio" name="rating2" value="1" disabled>
						        <label for="rating1">1</label>
						      </span>
						      ()
						</td>
						<td> <a href="#" class="btn btn-info">Autor</a> Há 3 anos</td>
						<td>333</td>
					</tr>
				</table>	               			
		               		      
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
