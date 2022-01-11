
<?php  


if (Users::Check() == false) {
	die('Você não tem permissão de acessar essa area, porfavor faça o login');
}

$planosarr = ['1'=>'Plano Basico','2'=>'Plano Intermediário','3'=>'Plano Premium'];
$infoplan = Mysql::connect()->prepare(" SELECT * FROM `usuarios_tb` WHERE email_user = ?");
$infoplan->execute(array($_SESSION['email']));
$info = $infoplan->fetchAll();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_PAGE; ?>styles/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_LAND;?>styleL/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<title>Início</title>
</head>
<body>
<div class="b-example-divider"></div>

  <header class="p-3 mb-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
         <div class="gg logo">
				<h3>FanmadeClips</h3>
			</div><!--end-logo-->
        </a>
        <div class="cell">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        	<li><a href="<?php echo INCLUDE_PATH_PAGE; ?>inicial" class="nav-link px-2 ">Início</a></li>
          <li><a href="<?php echo INCLUDE_PATH_PAGE;?>catalogo" class="nav-link px-2 ">Catálogo</a></li>
          <li><a href="<?php echo INCLUDE_PATH_PAGE;?>filmes" class="nav-link px-2 ">Filmes/Séries</a></li>
        </ul>
</div>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="input form-control" placeholder="Procurar..." aria-label="Search">
        </form>

         <a href="<?php echo INCLUDE_PATH_PAGE; ?>profile">
            <img src="https://github.com/mdo.png" alt="mdo" width="50" height="50">
          </a>
      </div>
    </div>
  </header>
  <!--responsivo-->
  <div class="header">
  <div class="gg logo">
        <h3>FanmadeClips</h3>
      </div><!--end-logo-->
      <div class="responsi">
      <a href="#" class="res"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
      <div class="uls">
         <ul>
          <li><a href="<?php echo INCLUDE_PATH_PAGE; ?>inicial" class="uls-res ">Início</a></li>
          <li><a href="<?php echo INCLUDE_PATH_PAGE;?>catalogo" class="uls-res ">Catálogo</a></li>
          <li><a href="<?php echo INCLUDE_PATH_PAGE;?>filmes" class="uls-res">Filmes/Séries</a></li>
          <li><a href="<?php echo INCLUDE_PATH_PAGE;?>profile" class="uls-res">Conta</a></li>
        </ul>
      </div>
</div>

<?php  
$url = isset($_GET['url']) ? $_GET['url'] : 'page/inicial';


if (file_exists($url.'.php')) {

	include($url.'.php');
}else{
	include('error.php');
}


?>


  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

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

    $('.showEps').click(function(){
      var show = $('.eps');
        if (show.is(':hidden')) {
          show.fadeIn();
        }else{
          show.fadeOut();
        }

    })
    $('.list-movies').slick({
      prevArrow: '<div class="class-to-style p"><a><span class="fa fa-angle-left"></a></span><span class="sr-only">Prev</span></div>',

nextArrow: '<div class="class-to-style n"><a><span class="fa fa-angle-right"></a></span><span class="sr-only">Next</span></div>',
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
    $(document).ready(function(){


    var info1 = $('.as');
    var info2 = $('.bs');
    var info3 = $('.cs');
    var info4 = $('.ds');
    var info5 = $('.es');
    var info6 = $('.fs');
    $('.i1').click(function(){
     if (info1.fadeIn()) {
          $('.container-list-movies').css('display','none');
          $('.backs').click(function(){
            location.reload();
          })
     }  

    })
     $('.i2').click(function(){
      if (info2.fadeIn()) {
        $('.container-list-movies').css('display','none');
          $('.backs').click(function(){
            location.reload();
          })
      }
      

      
    })
     $('.i3').click(function(){
      if (info3.fadeIn()) {
        $('.container-list-movies').css('display','none');
          $('.backs').click(function(){
            location.reload();
          })
      }
      

      
    })
     $('.i4').click(function(){
      if (info4.fadeIn()) {
        $('.container-list-movies').css('display','none');
          $('.backs').click(function(){
            location.reload();
          })
      }
      

      
    })
     $('.i5').click(function(){
      if (info5.fadeIn()) {
        $('.container-list-movies').css('display','none');
          $('.backs').click(function(){
            location.reload();
          })
      }
      

      
    })
     $('.i6').click(function(){
      if (info6.fadeIn()) {
        $('.container-list-movies').css('display','none');
          $('.backs').click(function(){
            location.reload();
          })
      }
      

      
    })


  })
  var deleteMe = $(".classif");
  setTimeout(function() {
    deleteMe.fadeOut();
  },5000);
    })

</script>
</body>
</html>