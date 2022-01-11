<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleL/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styleL/font-awesome.min.css">
	<title>FanmadeClips | Inicio</title>
</head>
<body>
<div class="container_landing">
	<div class="back"><img src="imgs/2.jpg"></div>
	<div class="container-header">
		<div class="header">
			<div class="logo">
				<h3>FanmadeClips</h3>
				<img class="gifs" src="imgs/1037-vlog-camera-outline.gif">
			</div><!--end-logo-->
			<div class="responsi">
			<a href="#" class="res"><i class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
			<a class="login-btn" href="<?php echo INCLUDE_PATH_LAND;?>login">Fazer Log-in</a>
			<div class="uls">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH_LAND;?>land">INICIO</a></li>
					<li><a href="<?php echo INCLUDE_PATH_LAND;?>sobre">SOBRE</a></li>
					<li><a href="<?php echo INCLUDE_PATH_LAND;?>planos">PLANOS</a></li>
					<li><a href="<?php echo INCLUDE_PATH_LAND;?>catalogo">CATÁLOGO</a></li>

				</ul>
			</div><!--end-uls-->
		</div><!--end-header-->
	</div><!--end-container_header-->
</div><!--end-container_landing-->
<?php  
$url = isset($_GET['url']) ? $_GET['url'] : 'land';

 if (file_exists('infos/'.$url.'.php')) {
 	include('infos/'.$url.'.php');
 }else{
 	echo 'nao existe';
 }


?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(function(){
		$('.res').click(function(){
		var uls = $('.uls');

		if (uls.is(':hidden')) {
			uls.fadeIn();
		}else{
			uls.fadeOut();
		}
		})
	})
</script>
<?php if ($url == 'signB') { ?>
<script>

	    $('#1fa').css('display','none');
		$('#2fa').css('display','none');
		$('#3fa').css('display','none');

	$(document).ready(function(){
		var upperCase = RegExp('[A-Z]');
		var number = RegExp('[0-9]');
		$('#password').keyup(function(){
			var password = $(this).val();
			if (password.length >= 8) {
             $('.valida').css('color','green');
             $('#1fa').fadeIn();
             
			}else{
				$('.valida').css('color','black');
				$('#1fa').fadeOut();
				

			}

			if(password.match(upperCase)) {
                    $('.upper').css('color','green');
                    $('#2fa').fadeIn();
                    
			}else{
				$('.upper').css('color','black');
				$('#2fa').fadeOut();
				
			}
			if (password.match(number)) {
				$('.num').css('color','green');
				$('#3fa').fadeIn();
			}else{
				$('.num').css('color','black');
				$('#3fa').fadeOut();
			}

		})
	})
</script>
<?php } ?>
</body>
</html>