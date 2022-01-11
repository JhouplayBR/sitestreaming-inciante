<?php 



if ($url == 'sair') {
	Users::Logout();
}

?>

<div class="perfil-container">
	<a href="<?php echo INCLUDE_PATH_PAGE?>sair">Sair</a>
</div>