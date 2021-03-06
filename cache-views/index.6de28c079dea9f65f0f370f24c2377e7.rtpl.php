<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"  /> <!--CHARSET INDICA O GRUPO DE CARACTERES QUE O NAVEGADOR VAI EXIBIR NO CASO UTF-8 PARA TRABALHAR COM ACENTOS  -->
	<title>Beira Rio</title>
	<link rel="stylesheet" type="text/css" href="res/site/css/style.css"/>
	


</head>



<body>
<div class="menup"  >	
<input type="checkbox" id="check2"/>
<label for="check2" id="icone2"><img src="https://i.imgur.com/RWHvwPE.png"/></label>
<div class="barra2">	
	<nav>
		<a href="#idcabecalho" ><div class="link2">Home</div></a>
		<a href="#hist"><div class="link2">Sobre</div></a>
		<a href="#galfoto"><div class="link2">Galeria</div></a>
		<a href="#serv"><div class="link2">Serviços</div></a>
		<a href="#faleConosco"><div class="link2">Fale Conosco</div></a>
	</nav>	
</div>
</div>

<div id="idinterface">



	<header id="idcabecalho">
 		

		
		        <img id="imagem_topo" src="res/site/imagens/titulo.jpg" />
		        




	
	
	</header>

<section id="idcorpo">
<article id="noticia_principal">
	
  <header id="cabecalho-artigo">
	<hgroup>
		
	
		<h3 class="direita">Atualizado em 22/Março/2022</h3>
		
	</hgroup>
</header>

<section id="hist">
<h2>Conheça nossa história</h2>

<p>A nossa empresa foi fundada em 2012,  por uma familia, que trabalham com seriedade, honestidade e comprometimento com o serviço prestado a nossos clientes, trazendo um serviço de qualidade, buscando entregar seu veiculo mais rápido possivel sem que prejudique a jornada de nossos clientes.
</p>
</section>

<section id="serv">
<h2>Serviços</h2>
<p>Oferecemos serviço de mecânica em geral:
</p>

<ul id="album">
	<li id="f1"><span>- Motor</span></li>
	<li id="f2"><span>- Suspensão</span></li>
	<li id="f3"><span>- Freio</span>
	<li id="f4"><span>- Embreagem"</span></li>
	<li id="f5"><span>- Alinhamento</span></li>
	<li id="f6"><span>- Balanceamento</span> </li>
</ul>

</section>

<table id="tabelaespec">
<h2>Preços</h2>
<caption>Tabela de preços<span>Mar/2022</span></caption>

<tr><td id="col1" class="ce">Alinhamento</td> <td id="col2" class="cd">R$20,00</td></tr>
<tr><td id="col1"  class="ce">Balanceamento</td><td id="col2" class="cd"> R$20 </td></tr>
<tr><td id="col1" class="ce">Cambagem</td><td id="col2" class="cd">R$20,00</td></tr>
<tr><td  id="col1" class="ce">Montagem Pneu</td> <td id="col2" class="cd"> R$20,00</td> </tr>
<tr><td  id="col1" class="ce">Caster</td> <td id="col2" class="cd"> R$20,00</td> </tr>

</table>

<section id="galfoto">
<h2>Galeria de fotos</h2>



<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>	
<div class="w3" >

<img class="mySlides" src="res/site/imagens/foto1.png" style="width:500px;height:300px">
<img class="mySlides" src="res/site/imagens/foto2.jpeg" style="width:500px;height:300px">
<img class="mySlides" src="res/site/imagens/foto3.jpeg" style="width:500px;height:300px">
<img class="mySlides" src="res/site/imagens/foto4.jpeg" style="width:500px;height:300px">
</div> 

<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>

</section>
<br>
<br>


<section id="faleConosco">
<h2>Fale Conosco</h2>

<form method="post" id="formContato"  oninput="">

<fieldset id="dados">
   	
   	<p><label for="cNome"> Nome:</label>  <input type="text" name="tNome" id="cNome" size="45" maxlength="45" placeholder="Nome Completo"/></p> 
   	<p> <label for="cEmail">E-mail:</label> <input type="email" name="tEmail" id="cEmail" size="45" maxlength="45" placeholder="exemplo@gmail.com"/></p>
   		<p> <label for="cTelefone">Telefone:</label> <input type="text" name="telefone" id="cTelefone" size="30" maxlength="30" placeholder="(**)*****-****"/></p>
	<p> <label for="cCidade">Cidade:</label> <input type="text" name="cidade" id="cCidade" size="30" maxlength="30" placeholder="cidade/estado"/></p> 

	 <p><label for="cMsg"> Mensagem:</label>
	 	<br>
	 	<textarea name="tMsg" id="cMsg" cols="45" rows="5" placeholder="digite sua mensagem"></textarea></p>
	 	<br>
	 	 <button type="submit" form="form1" value="Submit">Enviar</button>

   </fieldset>  


</form>
</section>

</article>
</section>


<footer id="rodape">
<p>&copy 2022 - Centro Automotivo Beira Rio LTDA ME<br/>
CNPJ: 14.769.821/0001-00 - Contato: (67) 30298292<br/>	
Rua Antonio Maria Coelho Nº770 Centro Campo Grande MS <br>
beirariocentroautomotivo@outlook.com <br>
<a href="multimidia.html" target="_blank">Facebook</a> </p>
</footer>
</div>


</body>
<script src="res/site/js/scriptws.js"></script>
</html>