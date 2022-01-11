<?php 

$verifPlans = Mysql::connect()->prepare("SELECT * FROM `usuarios_tb` WHERE email_user = ? ");
$verifPlans->execute(array($_SESSION['email']));
$infoplanos = $verifPlans->fetch();
$planoss = $infoplanos['plano_user'];

if ($planoss == 0) {

 	die('FAÇA A ASSINATURA PARA ASSISTIR');
 } 


if (isset($_GET['id'])) {
	$id = intval($_GET['id']);

}

$filmesTitles = ['1'=>'O Primeiro Sobrevivente','2'=>'Loop Dream','3'=>'Joia Infinita','4'=>'ZILLA'];

?>
<?php if ($id == 1) {?>
	<div class="moviesC">
	<h2>Você esta assistindo <?php echo $filmesTitles[$id]?></h2>
	<h5>Episódio 1 ("Ainda há esperança")</h5>
<iframe class="moviesS"  src="https://player.vdocipher.com/playerAssets/1.x/vdo/embed/index.html#otp=20160313versUSE323E6qpitTrMuHTi6NDBYYSudLe3fbdFNz6lRMw2yPmwsMsEe&playbackInfo=eyJ2aWRlb0lkIjoiNmYxYjBlYmUxOGVlNDkxYjk2ZDg4MmY4ZmMyYmRiYjgifQ==" allowFullScreen="true" allow="encrypted-media"></iframe>
<div class="classeA">
<img class="classif" src="<?php echo INCLUDE_PATH_PAGE?>../infos/catalog/idade10.png">
</div>
</div>

<?php } ?>
<?php if ($id == 2) {?>
	<div class="moviesC">
	<h2>Você esta assistindo <?php echo $filmesTitles[$id]?></h2>
	<h5>Episódio 1 ("Oxe, que estranho...")</h5>
<iframe class="moviesS"  src="https://player.vdocipher.com/playerAssets/1.x/vdo/embed/index.html#otp=20160313versUSE323WDnktt9s9t1eQbClfK16EPW6LKH14DasI2uOLgRNIhHJUI&playbackInfo=eyJ2aWRlb0lkIjoiZDYzOGY4ZTg4ZTk3NDEyM2ExNjAxMWRjNmQzMzI2OWIifQ=="  allowFullScreen="true" allow="encrypted-media"></iframe>
<div class="classeA">
<img class="classif" src="<?php echo INCLUDE_PATH_PAGE?>../infos/catalog/idade10.png">
</div>
</div>

<?php } ?>
<?php if ($id == 3) {?>
	<div class="moviesC">
	<h2>Você esta assistindo <?php echo $filmesTitles[$id]?></h2>
	<h5>Episódio 1 ("Oxe, que estranho...")</h5>
 <video class="moviesS" controls controlsList="nodownload">
  <source src="https://content-na.drive.amazonaws.com/cdproxy/templink/j72f5qsV_SzGurIZbHLESCu7rd-WWkM2OXPk50TD6U4eJxFPc?ownerId=A20DD9QF2P3HV8" type="video/mp4">

</video>
<?php } ?>
<?php if ($id == 4) {?>
	<div class="moviesC">
	<h2>Você esta assistindo <?php echo $filmesTitles[$id]?></h2>
	<h5>Episódio 1 ("O susto")</h5>
 <video class="moviesS" controls controlsList="nodownload">
  <source src="https://content-na.drive.amazonaws.com/cdproxy/templink/dGpqVNkl6JHnje-jj0N7iEASWaWh2yljWAaDXWDcpRUpX92IB?" type="video/mp4">

</video>
     
<div class="classeA">
<img class="classif" src="<?php echo INCLUDE_PATH_PAGE?>../infos/catalog/idade10.png">
</div>
</div>

<?php } ?>




