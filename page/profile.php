
<?php  
echo $url;
if (isset($_GET['sair'])) {
 Users::Logout();

}
	                 
	                   //                              

$verifPlans = Mysql::connect()->prepare("SELECT * FROM `usuarios_tb` WHERE email_user = ? ");
$verifPlans->execute(array($_SESSION['email']));
$infoplanos = $verifPlans->fetch();
$email_usuario = $infoplanos['email_user'];
$planoss = $infoplanos['plano_user'];
$usuario_name = $infoplanos['nome_user'];
$pass = $infoplanos['password_user'];


if (isset($_POST['submit'])) {
	$passChange = $_POST['pass'];
	
	function validasenha($senha){
        return preg_match('/[a-zA-Z\d]{8,}$/', $senha);
    };

    if (validasenha($passChange)) {
    $sqlChang = Mysql::connect()->prepare("UPDATE `usuarios_tb` SET password_user = ? WHERE email_user = ? ");
	$sqlChang->execute(array($passChange,$_SESSION['email']));  
	$correct = true;
}else{
	
}
}

?>




<div class="profile-container">
	<a class="out" href="<?php echo INCLUDE_PATH_PAGE;?>profile?sair">Sair<i class="fa fa-sign-out" aria-hidden="true"></i></a>
	<div class="profile">
		<div class="profile_img">
			<img src="https://cdn2.iconfinder.com/data/icons/filled-icons/493/happy-512.png" alt="mdo" width="360" height="360">
		</div>
		<div class="inputs-container">
			<form method="post">
			<div class="inputs">
			<input type="text" name="nome_user" value="<?php echo $usuario_name?>" disabled>
			<input type="email" name="email_user" value="<?php echo $email_usuario ?>" disabled>
			<input type="password" name="pass" value="<?php echo $pass?>">
			<?php if (@$correct == true) {?>
             <h2 class="corr">Sua senha foi alterada com sucesso!</h2>
			<?php }elseif (@$correct == false) {?>
				<h2 class="err">Sua senha deve conter pelo menos 8 caracteries!</h2>
				<?php } ?>
			<input class="Btn" type="submit" name="submit" value="Mudar Senha">
		</form>
		</div>
	</div>
	<?php if ($planoss != 0) {?>
	<h2>Plano ativo: <?php echo $planosarr[$planoss]?></h2>
<?php }else{ ?>
	<h5>Você não possui um plano Ativo ):</h5>

<?php } ?>
	</div>
