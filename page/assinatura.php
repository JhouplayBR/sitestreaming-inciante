<?php 


$verifPlans = Mysql::connect()->prepare("SELECT * FROM `usuarios_tb` WHERE email_user = ? ");
$verifPlans->execute(array($_SESSION['email']));
$infoplanos = $verifPlans->fetch();
$email_usuario = $infoplanos['email_user'];
$planoss = $infoplanos['plano_user'];

if ($planoss != 0) {
 	die('Você ja possui um plano ativo');
 } 


?>
<div class="assinatura-container">
	<h1>Olá, bem vindo ao Fanmade</h1>
	<h2>Para fazer a assinatura é muito simples, só basta você entrar em contato com nosso atendente pelo whatshapp!<br> Só basta
	clicar no botão abaixo para ser direcionado direto ao chat :)</h2>
    <a   href="https://api.whatsapp.com/send?phone=5518991366226&text=Ol%C3%A1%2C%20quero%20fazer%20a%20assinatura%20do%20FanmadeClips%20Meu%20email%20é:
    <?php echo $email_usuario ?>%20(%3A"  target="_blank"><img src="https://img.icons8.com/cotton/64/000000/whatsapp--v4.png"/></a>
	<h5>Obs: A assinatura uma vez paga, não precisara pagar novamente.<h5>

</div>

<footer>
	<div class="methods">
		<h3>Formas de pagamento no momento: </h3><img  src="../infos/catalog/pix-bc-logo.png">
	</div>
</footer>