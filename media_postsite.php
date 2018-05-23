<?php
$nome_1 = $_POST['nome1'];
$N1 = $_POST['n01'];
$N2 = $_POST['n02'];
$N3 = $_POST['n03'];

$media_1 = ($N1 + $N2 + $N3)/3;

if($media_1 >= 7){
	$situacao1 = "Aprovado";
}else{
	$situacao1 = "Reprovado";
}
$nome_2 = $_POST['nome2'];
$N4 = $_POST['n04'];
$N5 = $_POST['n05'];
$N6 = $_POST['n06'];

$media_2 = ($N4 + $N5 + $N6)/3;

if($media_2 >= 7){
	$situacao2 = "Aprovado";
}else{
	$situacao2 = "Reprovado";
}

$nome_3 = $_POST['nome3'];
$N7 = $_POST['n07'];
$N8 = $_POST['n08'];
$N9 = $_POST['n09'];

$media_3 = ($N4 + $N5 + $N6)/3;

if($media_3 >= 7){
	$situacao3 = "Aprovado";
}else{
	$situacao3 = "Reprovado";
}

$nome_4 = $_POST['nome4'];
$N10 = $_POST['n10'];
$N11 = $_POST['n11'];
$N12 = $_POST['n12'];

$media_4 = ($N10 + $N11 + $N12)/3;

if($media_4 >= 7){
	$situacao4 = "Aprovado";
}else{
	$situacao4 = "Reprovado";
}

$nome_5 = $_POST['nome5'];
$N13 = $_POST['n13'];
$N14 = $_POST['n14'];
$N15 = $_POST['n15'];

$media_5 = ($N13 + $N14 + $N15)/3;

if($media_5 >= 7){
	$situacao5 = "Aprovado";
}else{
	$situacao5 = "Reprovado";
}

$nome_6 = $_POST['nome6'];
$N16 = $_POST['n16'];
$N17 = $_POST['n17'];
$N18 = $_POST['n18'];

$media_6 = ($N16 + $N17 + $N18)/3;

if($media_6 >= 7){
	$situacao6 = "Aprovado";
}else{
	$situacao6 = "Reprovado";
}

$nome_7 = $_POST['nome7'];
$N19 = $_POST['n19'];
$N20 = $_POST['n20'];
$N21 = $_POST['n21'];

$media_7 = ($N19 + $N20 + $N21)/3;

if($media_7 >= 7){
	$situacao7 = "Aprovado";
}else{
	$situacao7 = "Reprovado";
}
$nome_8= $_POST['nome8'];
$N22 = $_POST['n22'];
$N23 = $_POST['n23'];
$N24 = $_POST['n24'];

$media_8 = ($N22 + $N23 + $N24)/3;

if($media_8 >= 7){
	$situacao8 = "Aprovado";
}else{
	$situacao8 = "Reprovado";
}
$nome_9 = $_POST['nome9'];
$N25 = $_POST['n25'];
$N26 = $_POST['n26'];
$N27 = $_POST['n27'];

$media_9 = ($N25 + $N26 + $N27)/3;

if($media_9 >= 7){
	$situacao9 = "Aprovado";
}else{
	$situacao9 = "Reprovado";
}
$nome_10 = $_POST['nome10'];
$N28 = $_POST['n28'];
$N29 = $_POST['n29'];
$N30 = $_POST['n30'];

$media_10 = ($N28 + $N29 + $N30)/3;

if($media_10 >= 7){
	$situacao10 = "Aprovado";
}else{
	$situacao10 = "Reprovado";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Boletim Escolar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
<audio controls>
	<source src="audio/DomQuixote.mp3" type="audio/mpeg">
	<source src="/assets_tutorials/media/Loreena_Mckennitt_Snow_56bit.ogg" type="audio/ogg">
</audio>
	</head>
	<body class="left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Boletim Escolar</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="boletimescolar.html">Boletim Escolar</a></li>
								<li><a href="Eventos.html">Eventos</a></li>
								<li><a href="Noticias.html">Noticias IFMA</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<div class="row 200%">
							<div class="4u 12u(mobile)" id="sidebar">
								<hr class="first" />
								<section>
									<header>
										<h3><a href="#">Aconteceu no IFMA:</a></h3>
									</header>
									<p>
										Alguns eventos que marcaram 2017/2018 no Campus Avançado do IFMA de Porto Franco e mereceram destaque.
									</p>
									<footer>
										<a href="#" class="button">Saiba Mais...</a>
									</footer>
								</section>
								<hr />
								<section>
									<header>
										<h3><a href="#">Noticias IFMA</a></h3>
									</header>
									<p>
										Eventos de 2017/2018
									</p>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Alunos do IFMA vão ao 1º Festival da Banana em São João do Paraíso</h4>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>1º Semana de Ciência e Tecnologia Campus Avançado de Porto Franco.</h4>
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Estudantes visitam empresa de produção de cana-de-açúcar</h4>
											
										</div>
									</div>
									<div class="row 50%">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Curso de Extensão do Polo Olímpico de Treinamento Intensivo (POTI).</h4>
											
										</div>
									</div>
									<div class="row 50% no-collapse">
										<div class="4u">
											<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
										</div>
										<div class="8u">
											<h4>Alunos e professores orientam produtores na Expofran.</h4>
										</div>
									</div>
									<footer>
										<a href="#" class="button">Continue Lendo...</a>
									</footer>
								</section>
							</div>
							<div class="8u 12u(mobile) important(mobile)" id="content">
								<article id="main">
									<header>
										<p id="titulo" align="center"><a href="#">Resultado Final dos Alunos:</a></p>
<form id="formulario" name="formulario" method="post" action="media_postsite.php">
<table border="1">
	<tr id="linha1">
		<td><strong>Nº</strong></td>
		<td><strong>NOME</strong></td>
		<td><strong>N1</strong></td>
		<td><strong>N2</strong></td>
		<td><strong>N3</strong></td>
		<td><strong>Media</strong></td>
		<td><strong>Situação</strong></td>
	</tr>
<?php
echo "<tr> <td>1</td> <td>$nome_1</td> <td>$N1</td> <td>$N2</td> <td>$N3</td> <td>$media_1</td> <td>$situacao1</td></tr>";
echo "<tr> <td>2</td> <td>$nome_2</td> <td>$N4</td> <td>$N5</td> <td>$N6</td> <td>$media_2</td> <td>$situacao2</td></tr>";
echo "<tr> <td>3</td> <td>$nome_3</td> <td>$N7</td> <td>$N8</td> <td>$N9</td> <td>$media_3</td> <td>$situacao3</td></tr>";
echo "<tr> <td>4</td> <td>$nome_4</td> <td>$N10</td> <td>$N11</td> <td>$N12</td> <td>$media_4</td> <td>$situacao4</td></tr>";
echo "<tr> <td>5</td> <td>$nome_5</td> <td>$N13</td> <td>$N14</td> <td>$N15</td> <td>$media_5</td> <td>$situacao5</td></tr>";
echo "<tr> <td>6</td> <td>$nome_6</td> <td>$N16</td> <td>$N17</td> <td>$N18</td> <td>$media_6</td> <td>$situacao6</td></tr>";
echo "<tr> <td>7</td> <td>$nome_7</td> <td>$N19</td> <td>$N20</td> <td>$N21</td> <td>$media_7</td> <td>$situacao7</td></tr>";
echo "<tr> <td>8</td> <td>$nome_8</td> <td>$N22</td> <td>$N23</td> <td>$N24</td> <td>$media_8</td> <td>$situacao8</td></tr>";
echo "<tr> <td>9</td> <td>$nome_9</td> <td>$N25</td> <td>$N26</td> <td>$N27</td> <td>$media_9</td> <td>$situacao9</td></tr>";
echo "<tr> <td>10</td> <td>$nome_10</td> <td>$N28</td> <td>$N29</td> <td>$N30</td> <td>$media_10</td> <td>$situacao10</td></tr>";
?>

		</table>
</form>
							</div>
						</div>
						<hr />
						<div class="row">
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
								<br />
								<br />
								<header>
									<h3><a href="#">Festival Latino-Americano de Instalação de Software Livre.</a></h3>
								</header>
								<p>
									Festival Latino-Americano de Instalação de Software Livre. Com o objetivo de difundir ainda mais a cultura de softwares livres por todo o mundo o evento já faz parte do calendário de participações, no seu segundo ano consecutivo.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>
								<header>
									<h3><a href="#">Hacker Meeting 2018</a></h3>
								</header>
								<p>
									O evento tem como objetivo debater a temática da cyber segurança, trazendo uma extensa programação de atividades para alunos, professores e demais interessados no tema.
								</p>
							</article>
							<article class="4u 12u(mobile) special">
								<a href="#" class="image featured"><img src="images/pic09.jpg" alt="" /></a>
								<header>
									<h3><a href="#">III Universo IFMA</a></h3>
								</header>
								<p>
									O Universo IFMA é um ambiente criado especialmente para incentivar o desenvolvimento de ideias inovadoras, da pesquisa aplicada e do empreendedorismo inovador no Instituto Federal do Maranhão.
								</p>
							</article>
						</div>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">

							<!-- Tweets -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-twitter circled"><span class="label">Twitter</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="tweet">
												O IFMA está de parabéns pela grande formação que esta promovendo nos jovens.
												<span class="timestamp">5 minutos atrás</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Otimo site parabéns ao organizador
												<span class="timestamp">30 minutos atrás</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Importante passo para o desenvolvimento de toda a região.
												<span class="timestamp">3 horas atrás</span>
											</article>
										</li>
										<li>
											<article class="tweet">
												Como faço para fazer sites tão bons quanto esse?
												<span class="timestamp">5 horas atrás</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Posts -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-file circled"><span class="label">Comentários</span></h2>
									</header>
									<ul class="divided">
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Muito bom tudo o que estão fazendo ai, quero saber mais.</a></h3>
												</header>
												<span class="timestamp">3 horas atrás</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Ano que vem eu quero estudar ai.</a></h3>
												</header>
												<span class="timestamp">6 horas atrás</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Quanto abrem as inscrições?</a></h3>
												</header>
												<span class="timestamp">Ontem.</span>
											</article>
										</li>
										<li>
											<article class="post stub">
												<header>
													<h3><a href="#">Fui aluno da casa e foi muito importante para minha formação.</a></h3>
												</header>
												<span class="timestamp">2 dias atrás.</span>
											</article>
										</li>
									</ul>
								</section>

							<!-- Photos -->
								<section class="4u 12u(mobile)">
									<header>
										<h2 class="icon fa-camera circled"><span class="label">Galeria</span></h2>
									</header>
									<div class="row 25%">
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic10.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
										</div>
										<div class="6u">
											<a href="#" class="image fit"><img src="images/pic14.jpg" alt="" /></a>
										</div>
										<div class="6u$">
											<a href="#" class="image fit"><img src="images/pic15.jpg" alt="" /></a>
										</div>
									</div>
								</section>

						</div>
						<hr />
						<div class="row">
							<div class="12u">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Quer entrar em contato conosco?</h3>
										</header>
										<p>Aqui vai os nossos contatos, para que você fique por dentro sempre de novidades e possa falar com a gente.</p>
										<ul class="icons">
											<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
											<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Cortez@WebDesigner.</li><li>Design: <a href="http://html5up.net">CortezWeb.</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>