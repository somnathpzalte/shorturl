<?php use Cake\Routing\Router;?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/findoctor/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jun 2018 17:53:13 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<title>TINY  URL</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- BASE CSS -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('menu.css') ?>
    <?= $this->Html->css('vendors.css') ?>
    <?= $this->Html->css('icon_fonts/css/all_icons_min.css') ?>
    <?= $this->Html->css('custom.css') ?>

	
</head>

<body>
	
	<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
	</div>
	<!-- /Preload-->
	
	<div id="page">		
	<header class="header_sticky">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="">
						<h1><a href="javascript:;" >TINY URL</a></h1>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					
					<nav id="menu" class="main-menu">
						<ul>
							<li>Tiny URL</li>
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->
	
	<main>
		<div class="hero_home version_1">
			<div class="content">
				<h3>SIMPLE,EASY TINY URLS</h3>
				<p>
					Brand, track and optimize every touchpoint, the world's leading link management platform
				</p>
				<form method="post">
					<div id="custom-search-input">
						<div class="input-group">
							<input type="url" class=" search-query" placeholder="http://www.mywebsite.com" name="main_url" required>
							<input type="submit" class="btn_search" value="Search">
						</div>
                        <br><br>
                        <p align="left" id="msg"></p>
                        <?php if(!empty($genData)):?>
                        <table>
                        <tr>
                            <tr><td align="left"><?= isset($genData['main_url'])?$genData['main_url']:''?></td></tr>
                            <tr>
                            <td align="left"><i id="btn_copy"><?= isset($genData['tiny_url'])?$base.'ur/'.$genData['tiny_url']:''?></i>
                            <button  type="button" class="btn btn-primary btn-sm" onClick="copyToClipboard('btn_copy')">Copy</button>
                            </td></tr>
                        </tr>
                       
                        </table>
<?php endif;?>
					</div>
				</form>
               
			</div>
		</div>
		
	</main>
	<!-- /main content -->
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					
				</div>
				<div class="col-lg-3 col-md-4">
					
				</div>
				<div class="col-lg-3 col-md-4">
					
				</div>
				<div class="col-lg-3 col-md-4">
					
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="javascript:;">Terms and conditions</a></li>
						<li><a href="javascript:;">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2018</div>
				</div>
			</div>
		</div>
	</footer>

	<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
  
	<script data-cfasync="false" src="../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.2.4.min.js"></script>
    <?php
 echo $this->Html->script(
        array(      
            'common_scripts.min.js',
            'functions.js'
    ));
    ?>
<script>
function copyToClipboard(elementId) {


var aux = document.createElement("input");
aux.setAttribute("value", document.getElementById(elementId).innerHTML);
document.body.appendChild(aux);
aux.select();
document.execCommand("copy");

document.body.removeChild(aux);
document.getElementById('msg').innerHTML="Copied to Clipboard";
setTimeout(function(){ 
    document.getElementById('msg').innerHTML="";
}, 2000);
}
</script>
</body>


<!-- Mirrored from www.ansonika.com/findoctor/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jun 2018 17:53:49 GMT -->
</html>