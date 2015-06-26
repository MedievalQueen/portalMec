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
			<div class="container-fluid">  
				<div class="row">
					<p><h1>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</h1></p>  <br/>
	    			<div class="col-sm-3">
	    			  <a href="images/23906.jpg">
	        			
	        			<img src="images/23906.jpg" alt="Pulpit Rock" width="360" height="320">
	      			  </a>
	   		 		</div>
	    			<div class="col-sm-9">
	      				<div class="col-sm-12">
	           			A design specification provides explicit information about the requirements for a product and how the product is to be put together. It is the 				most traditional kind of specification, having been used historically in public contracting for buildings, highways, and other public works, and 				represents the kind of thinking in which architects and engineers have been trained.
		      			</div>
		      			<div class="col-sm-12" >
							
 							<br/><br/><br/>
							<table class="table">
								<tr>
									<td>Avalie:</td><td>Postado por:</td><td>Visualizações:</td><td>Total Downloads: </td><td></td>
								</tr>
								<tr>
									<td>
									      <span class="starRating">
									        <input id="rating5" type="radio" name="rating" value="5">
									        <label for="rating5">5</label>
									        <input id="rating4" type="radio" name="rating" value="4">
									        <label for="rating4">4</label>
									        <input id="rating3" type="radio" name="rating" value="3" checked>
									        <label for="rating3">3</label>
									        <input id="rating2" type="radio" name="rating" value="2">
									        <label for="rating2">2</label>
									        <input id="rating1" type="radio" name="rating" value="1">
									        <label for="rating1">1</label>
									      </span>
									      ()
									</td>
									<td> <a href="#" class="btn btn-info">Jonas</a> Há 3 anos</td>
									<td>333</td>
									<td>453</td>
									<td><a href="#" class="btn btn-primary">Download</a></td>
								</tr>

							</table>	               			
						</div>
					</div>
				</div>
					      	<br/><br/>
					      	<table class="table table-striped">
					        <tr >
					            <th>
					                <span>Título: </span>
					            </th>
					            <td >Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</td>
					        </tr>
					        <tr >
					            <th >
					                <span >Tipo: </span>
					            </th>
					            <td >Imagem</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Objetivo:</span>
					            </th>
					            <td >Mostrar, de forma tridimensional, a fórmula estrutural da molécula de 1,2-etanodiol  (C2H6O2)</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Resumo:</span>
					            </th>
					            <td >Apresenta, de forma tridimensional, a fórmula estrutural da molécula de 1,2-etanodiol (C2H6O2)</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Observação:</span>
					            </th>
					            <td >Colaborador(es): Ilídio Martins (Programador). Projeto co-financiado pela União Européia. Para visualizar este recurso é necessário usar óculos anaglyph vermelho/azul</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Curriculum Componente:</span>
					            </th>
					            <td >Ensino Médio::Química<br />
					                Educação Superior::Ciências Exatas e da Terra::Química
					            </td>
					        </tr>
					        <tr >
					            <th>
					                <span >Tema:</span>
					            </th>
					            <td >Educação Superior::Ciências Exatas e da Terra::Química::Química Orgânica<br />Educação Básica::Ensino Médio::Química::Modelos de constituição: substâncias, transformações químicas</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Autor:</span>
					            </th>
					            <td >Paiva, João</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Uploader:</span>
					            </th>
					            <td >Jonas</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Língua:</span>
					            </th>
					            <td >Não Aplicável (NA)
					            </td>
					        </tr>
					        <tr >
					            <th>
					                <span >País:</span>
					            </th>
					            <td >Portugal (pt)
					            </td>
					        </tr>
					        <tr >
					            <th>
					                <span >Editor:</span>
					            </th>
					            <td >Molecularium Simulações em Química-Física</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Descrição:</span>
					            </th>
					            <td >Noções básicas de Química</td>
					        </tr>
					        <tr >
					            <th>
					                <span >Endereço Web:</span>
					            </th>
					            <td >
					                <a href="#" target="_blank">http://www..../...html</a>
					            </td>
					        </tr>
					        <tr >
					            <th>
					                <span >Titulares de direitos autorais:</span>
					            </th>
					            <td >Molecularium Simulações em Química-Física</td>
					        </tr>
					        <tr >
					           <th>
					                <span >Licensa:</span>
					            </th>
					            <td >Creative Commons Attribution-No Derivative Works 3.0 Unported. You are free: to Share - to copy, distribute and transmit the work. Under the following conditions:  Attribution. You must attribute the work in the manner specified by the author or licensor (but not in any way that suggests that they endorse you or your use of the work). No Derivative Works. You may not alter, transform, or build upon this work. For any reuse or distribution, you must make clear to others the license terms of this work. The best way to do this is with a link to this web page. Any of the above conditions can be waived if you get permission from the copyright holder. Nothing in this license impairs or restricts the author's moral rights</td>
					        </tr>
					        <tr >
					           <th>
					                <span >Publicador:</span>
					            </th>
					            <td >Universidade de Brasília (UnB)</td>
					        </tr>
					        <tr >
					            <th>
					                <span >URI:</span>
					            </th>
					            <td >
					                <a href="http://localhost:3000/objeto.php" target="_blank">http://localhost:3000/objeto.php</a>
					            </td>
					        </tr>
					        <tr >
					            <th>
					                <span >O objeto educacional aparece nos seguintes tipos de recursos:</span>
					              </th>
					              <td >
					                <a href="" target="_blank">Ensino Médio: Química: Imagens</a>
					                <br />
					                <a href="" target="_blank">Ensino Médio: Biologia: Imagens</a>
					            </td>
					        </tr>
					    </table>
	    	</div>
	</div><!-- /container -->

    <?php include("_footer.html") ?>

  </body>
</html>
