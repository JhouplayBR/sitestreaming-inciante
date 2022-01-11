<?php  

$verifPlan = Mysql::connect()->prepare("SELECT * FROM `usuarios_tb` WHERE email_user = ? ");
$verifPlan->execute(array($_SESSION['email']));
$infoplano = $verifPlan->fetch()['plano_user'];

?>
<!---O primeiro sobrevuivente--->
<!--Background-->
<div class="background as">
<img src="backgrounds/ca1.jpg">	
</div>
<!--backgroun-->
<div class="infos as">
	<a class="backs"><i class="fa fa-arrow-left back" aria-hidden="true"></i></a>
	<div class="titles">
		<h3>AÇÃO | AVENTURA | SUSPENSE</h3>
		<h2>O Primeiro Sobrevivente</h2>
		<h4>2018 | DIRETOR: <b>Jhonata Gustavo</b> | TEMPORADA 1 <b>(2 EPISÓDIOS)</b></h4>
		<p>Um garoto tenta sobreviver em provas de sobrevivencia em sua cidade, mas ele é muito fraco e muito abaixo dos outros oponentes
		ele faz de tudo para um dia conseguir vencer todos eles...</p>
		<div class="assbtn">
                <?php if ($infoplano != '0') { ?>
			<a href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=1">Assistir Agora</a>
			<a  class="showEps" href="#">Todos Episódios</a>
			<div class="eps">

				<div class="list-ep">
				<img class="icons" src="backgrounds/ca1.jpg"><a class="epsA" href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=1">Episódio 1 <b>"Ainda há esperança"</b></a>
			</div>
				<div class="list-ep">
				<img class="icons" src="backgrounds/ca1.jpg"><a class="epsA" href="#">Episódio 2 <b>"Uma segunda chance"</b></a>
			</div>


		</div>
		<?php }else { ?>
			<a class="lock" href="<?php echo INCLUDE_PATH_PAGE?>assinatura"><i class="fa fa-lock" aria-hidden="true"></i> FAÇA A ASSINATURA PARA ASSISTIR</a>
		<?php } ?>
			

		</div>
	</div>
</div>
<!---Fim-- Primeiro sobrevivente-->
<!---O Loop dream--->
<!--Background-->
<div class="background bs">
<img src="backgrounds/ca2.jpg">	
</div>
<!--backgroun-->
<div class="infos bs">
	<a class="backs"><i class="fa fa-arrow-left back" aria-hidden="true"></i></a>
	<div class="titles">
		<h3>AÇÃO | TERROR | SUSPENSE</h3>
		<h2>Loop Dream</h2>
		<h4>2018 | DIRETOR: <b>Jhonata Gustavo</b> | TEMPORADA 1 <b>(1 EPISÓDIO)</b></h4>
		<p>O persongem Leonardo, ao acordar percebe que tudo em sua casa esta diferente e assustador, inclusive seu irmão...</p>
		<div class="assbtn">
                <?php if ($infoplano != '0') { ?>
			<a href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=2">Assistir Agora</a>
			<a  class="showEps" href="#">Todos Episódios</a>
			<div class="eps">
				<div class="list-ep">
				<img class="icons" src="backgrounds/ca2.jpg"><a class="epsA" href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=2">Episódio 1 <b>"Oxe, que estranho..."</b></a>
			</div>


		</div>
		<?php }else { ?>
			<a class="lock" href="<?php echo INCLUDE_PATH_PAGE?>assinatura"><i class="fa fa-lock" aria-hidden="true"></i> FAÇA A ASSINATURA PARA ASSISTIR</a>
		<?php } ?>
			

		</div>
	</div>
</div>
<!---Fim-- loop dream-->
<!---The mas of zumbie--->
<div class="background cs">
<img src="backgrounds/ca4.jpg">	
</div>
<!--backgroun-->
<div class="infos cs">
	<a class="backs"><i class="fa fa-arrow-left back" aria-hidden="true"></i></a>
	<div class="titles">
		<h3>AÇÃO | AVENTURA | SUSPENSE</h3>
		<h2>Joia Infinita</h2>
		<h4>2018 | DIRETOR: <b>Jhonata Gustavo</b> | TEMPORADA 1 <b>(1 EPISÓDIO)</b></h4>
		<p>Ao chegar em sua casa, Leo fica surpreso com uma notícia que aparece em seu celular, para ele aquilo não se passa de uma brincadeira
		mas ...</p>
		<div class="assbtn">
                <?php if ($infoplano != '0') { ?>
			<a href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=3">Assistir Agora</a>
			<a  class="showEps" href="#">Todos Episódios</a>
			<div class="eps">

				<div class="list-ep">
				<img class="icons" src="backgrounds/ca4.jpg"><a class="epsA" href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=3">Episódio 1 <b>"Um dia anomormal"</b></a>
			</div>
				


		</div>
		<?php }else { ?>
			<a class="lock" href="<?php echo INCLUDE_PATH_PAGE?>assinatura"><i class="fa fa-lock" aria-hidden="true"></i> FAÇA A ASSINATURA PARA ASSISTIR</a>
		<?php } ?>
			

		</div>
	</div>
</div>
<!---Fim-- the mas of zumbie-->

<!---Salve o mundo--->
<div class="background ds">
<img src="backgrounds/ca3.jpg">	
</div>
<!--backgroun-->
<div class="infos ds">
	<a class="backs"><i class="fa fa-arrow-left back" aria-hidden="true"></i></a>
	<div class="titles">
		<h3>AÇÃO | TERROR | SUSPENSE</h3>
		<h2>ZILLA</h2>
		<h4>2019 | DIRETOR: <b>Jhonata Gustavo</b> | TEMPORADA 1 <b>(5 EPISÓDIOs)</b></h4>
		<p>O personagem leonardo esta em sua casa tranquilo, quando derrepente...</p>
		<div class="assbtn">
                <?php if ($infoplano != '0') { ?>
			<a href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=4">Assistir Agora</a>
			<a  class="showEps" href="#">Todos Episódios</a>
			<div class="eps">
				<div class="list-ep">
				<img class="icons" src="backgrounds/ca3.jpg"><a class="epsA" href="<?php echo INCLUDE_PATH_MOVIES; ?>filme?id=3">Episódio 1 <b>"O susto"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca3.jpg"><a class="epsA" href="#">Episódio 2 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca3.jpg"><a class="epsA" href="#">Episódio 3 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca3.jpg"><a class="epsA" href="#">Episódio 4 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca3.jpg"><a class="epsA" href="#">Episódio 5 <b>"A catastrofe"</b></a>
			</div>
				


		</div>
		<?php }else { ?>
			<a class="lock" href="<?php echo INCLUDE_PATH_PAGE?>assinatura"><i class="fa fa-lock" aria-hidden="true"></i> FAÇA A ASSINATURA PARA ASSISTIR</a>
		<?php } ?>
			

		</div>
	</div>
</div>
<!---Instarce-->
<div class="background es">
<img src="backgrounds/ca5.jpg">	
</div>
<!--backgroun-->
<div class="infos es">
	<a class="backs"><i class="fa fa-arrow-left back" aria-hidden="true"></i></a>
	<div class="titles">
		<h3>AÇÃO | TERROR | SUSPENSE</h3>
		<h2>INTRASPACE</h2>
		<h4>2020 | DIRETOR: <b>Jhonata Gustavo, Leonardo Silva</b> | TEMPORADA 1 <b>(7 EPISÓDIOS)</b></h4>
		<p>Um garoto que sonha ir para o espaço, decide criar sua propria nave espaçial para conquistar seu sonho, com muito <br> esforço ele
		consegue ir ao espaço, mas...</p>
		<div class="assbtn">
                <?php if ($infoplano != '0') { ?>
			<a href="#">Assistir Agora</a>
			<a  class="showEps" href="#">Todos Episódios</a>
			<div class="eps">
				<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 1 <b>"O sonho"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 2 <b>"Sera que é possivel?..."</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 3 <b>"O inimaginavel acontece!"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 4 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 5 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 6 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 7 <b>"A catastrofe"</b></a>
			</div>
			<div class="list-ep">
				<img class="icons" src="backgrounds/ca5.jpg"><a class="epsA" href="#">Episódio 8 <b>"A catastrofe"</b></a>
			</div>
				


		</div>
		<?php }else { ?>
			<a class="lock" href="<?php echo INCLUDE_PATH_PAGE?>assinatura"><i class="fa fa-lock" aria-hidden="true"></i> FAÇA A ASSINATURA PARA ASSISTIR</a>
		<?php } ?>
			

		</div>
	</div>
</div>
<!---Fim-- Intra-->
<!---Salve o mundo--->
<div class="background fs">
<img src="backgrounds/ca6.jpg">	
</div>
<!--backgroun-->
<div class="infos fs">
	<a class="backs"><i class="fa fa-arrow-left back" aria-hidden="true"></i></a>
	<div class="titles">
		<h3>AÇÃO | TERROR | SUSPENSE</h3>
		<h2>Shingeki no Kyojin (FANMADE)</h2>
		<h4>2019 | DIRETOR: <b>Jhonata Gustavo</b> | TEMPORADA 1 <b>(6 EPISÓDIOS)</b></h4>
		<p>Dois amigos estão de boa em suas casas, quando de repente uma catastrofe começa acontecer no mundo todo...</p>
		<div class="assbtn">
                <?php if ($infoplano != '0') { ?>
			<a href="#">Assistir Agora</a>
			<a  class="showEps" href="#">Todos Episódios</a>
			<div class="eps">
				<div class="list-ep">
				<img class="icons" src="backgrounds/ca6.jpg"><a class="epsA" href="#">Episódio 1 <b>"A catastrofe"</b></a>
			</div>
				


		</div>
		<?php }else { ?>
			<a class="lock" href="<?php echo INCLUDE_PATH_PAGE?>assinatura"><i class="fa fa-lock" aria-hidden="true"></i> FAÇA A ASSINATURA PARA ASSISTIR</a>
		<?php } ?>
			

		</div>
	</div>
</div>

<div class="container-list-movies">
	<div class="list-movies">
		<div class="list">
			<a class="i1"><img class="img_cat" src="../infos/catalog/1.jpg"></a>
		</div>
		<div class="list">
			<a class="i2"><img class="img_cat" src="../infos/catalog/2.jpg"></a>
		</div>
		<div class="list">
			<a class="i3"><img class="img_cat" src="../infos/catalog/4.jpg"></a>
		</div>
		<div class="list">
			<a class="i4"><img class="img_cat" src="../infos/catalog/3.jpg"></a>
		</div>
		<div class="list">
			<a class="i5"><img class="img_cat" src="../infos/catalog/5.jpg"></a>
		</div>
		<div class="list">
		<a class="i6"><img class="img_cat" src="../infos/catalog/6.jpg"></a>
		</div>
		<div class="list">
		<img class="img_cat" src="../infos/catalog/7.jpeg">
		</div>
		<div class="list">
		<img class="img_cat" src="../infos/catalog/8.jpg">
		</div>
		<div class="list">
		<img class="img_cat" src="../infos/catalog/9.jpg">
		</div>
	</div>
</div>






