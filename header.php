<?php include('ini.php');if(session_status() == PHP_SESSION_NONE){session_start();}?>
<!DOCTYPE html>
<html lang="es">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
<?php
$men_cat='/temas/';
$val=rand(1, 10);
define("homeUrl", "www.elinformador.com.ve");
?>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<script>
		    $(function() {
			$.post('wp-content/themes/InfoOrange-master/wid.php',{width:screen.width,height:screen.height},function(json){
			    if(json.val) {
				console.log(json.wid+'x'+json.hei+json.wscr);
			    } else {
				console.log('error');
			    }
			},'json');
		    });
		</script>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-7524217459588616",
    enable_page_level_ads: true
  });
</script>

<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT, gaTrack: true, gaId: 'UA-40942673-1'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:700,400" >
                <link rel="stylesheet" href="/wp-content/themes/InfoOrange-master/style.css" >
                <link rel="stylesheet" href="/wp-content/themes/InfoOrange-master/responsive.css" >
                <link rel="stylesheet" href="/wp-content/themes/InfoOrange-master/slider.css" >
		<?php wp_head(); ?>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="author" content="Frank Barrera (farkbarn)" />
		<meta name="organization" content="Diario El Informador C.A." />
		<meta name="classification" content="Noticias, Actualidad, Diario" />
		<meta name="description" content=" El Informador - Diario Venezolano" />
		<meta name="google-site-verification" content="78f1cd448e49d9db" />
		<meta name="keywords" content="mundo,latinoamerica,Argentina,Bolivia,Brasil,Chile,Colombia,Costa Rica,Cuba,Ecuador" />
		<meta name="keywords" content="El Salvador,Guatemala,Haiti,Haití Honduras,Mexico,México,Nicaragua,Panama,Panamá" />
		<meta name="keywords" content="Paraguay,Peru,Perú,República Dominicána,Republica,República,Dominicana,Dominicána,Uruguay,Venezuela" />
		<meta name="keywords" content="sucesos,deportes,nacionales,internacionales,tecnologia,salud,negocios,economia,espectaculos,farandula,opinion" />
		<meta name="keywords" content="google,android,facebook,yahoo,gmail,microsoft,linkedin,apple,samsung" />
		<meta name="keywords" content="artistas,actores,diputados,gobierno,deportista,usuarios,fedecamaras,polar" />
		<meta name="keywords" content="sexualidad,padres,informatica,redes,sociales,analisis,conocimiento,petroleo" />
		<meta name="keywords" content="dolar,bolivar,VEF,USD,COP,peso,empleo,policia,nacional,contraloria,portafolio,web,euro" />
		<meta name="keywords" content="SIM,gsm,movistar,movilnet,digitel,telefonia,hot,canal" />
		<meta name="keywords" content="stock,celine dion,serene williams,oil,prices,mega,megaupload" />
		<meta name="keywords" content="xbox,nasa,marte,smart,phone,inteligente,sony,wikipedia,noticia" />
		<meta name="keywords" content="gripe,vacuna,h1n,virus,embarazo,cancer,alimento,VIH,violencia,obesidad" />
		<meta name="keywords" content="Elinformador,El Informador,Diario,Periodico,Noticias,periodismo"  />
		<?php //<script async="async" src="/wp-content/themes/nueva/js/vendor/modernizr-2.6.1.min.js" ></script> ?>
		<?php //versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
		<?php //versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."responsive.css") ?>
		<?php //versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."slider.css") ?>
		<?php //versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/vendor/modernizr-2.6.1.min.js") ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script async id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
<?php /*		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
			<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
			<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script src="http://code.jquery.com/jquery-latest.js"></script>
*/ ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<script async type="text/javascript" src="/wordpress/wp-content/themes/InfoOrange-master/js/jquery.cycle.all.js"></script>
		<link rel="icon" type="image/gif" href="/wordpress/wp-content/themes/InfoOrange-master/img/favicon.gif" />
<?php
	$url=home_url(add_query_arg(array()));
	$tit='';
	if($url=='http://www.elinformador.com.ve/'){
		$tit='El Informador - Diario Online Venezolano';
	}
?>
		<title><?php wp_title('', true, 'right'); ?> <?php echo $tit; //bloginfo('name'); ?> </title>
<script defer type="text/javascript">//<![CDATA[
$(function(){
    $('#silueta article:gt(0)').hide();
    setInterval(function(){
      $('#silueta article:first-child').fadeOut(0)
         .next('article').fadeIn(1000)
         .end().appendTo('#silueta');}, 4000);
});
//]]></script>

<script defer type="text/javascript">//<![CDATA[
$(function(){
    $('#marq_tit article:gt(0)').hide();
    setInterval(function(){
      $('#marq_tit article:first-child').fadeOut(0)
         .next('article').fadeIn(1000)
         .end().appendTo('#marq_tit');}, 6000);
});
//]]></script>
		<!--[if lt IE 9]>
			<script defer src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
		<![endif]-->
		<!--[if lt IE 7]>
			<p class="chromeframe"> Usted est� usando un Navegador <strong>Desactualizado</strong>. Por favor <a href="http://browsehappy.com/">Actualicese</a> o <a href="http://www.google.com/chromeframe/?redirect=true"> Active Google Chrome Frame</a> para mejorar su experiencia.</p>
		<![endif]-->
<script type='text/javascript' src='http://ads.elinformador.com.ve/www/delivery/spcjs.php?id=1'></script>

<script async="async">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
<?php
// New Google Analytics code to set User ID.
// $userId is a unique, persistent, and non-personally identifiable string ID.
if (isset($userId)) {
  $gacode = "ga('create', 'UA-40942673-1', { 'userId': '%s' });";
  echo sprintf($gacode, $userId);
} else {
  $gacode = "ga('create', 'UA-40942673-1');";
  echo sprintf($gacode);
}?>
<?php /*  ga('create', 'UA-40942673-1', 'elinformador.com.ve', {'userId':'USER_ID'});*/
/*  ga('set','&uid',{USER_ID});*/ ?>
  ga('send', 'pageview');
</script>

<?php /*
<!-- <script defer src='https://www.google.com/recaptcha/api.js'></script> -->
<!-- Google Tag Manager --> */ ?>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MPP3R8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script defer>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPP3R8');</script>
<?php /* <!-- End Google Tag Manager --> */ ?>

<?php include('zon_ads/pageunder.js'); ?>



<script>
//<![CDATA[
$(document).ready(function(){
$("#pageflip").hover(function() {
$("#pageflip img , .msg_block").stop()
.animate({
width: '307px',
height: '319px'
}, 500);
} , function() {
$("#pageflip img").stop()
.animate({
width: '50px',
height: '52px'
}, 220);
$(".msg_block").stop()
.animate({
width: '50px',
height: '50px'
}, 200);
});
});
//]]>
</script>

<style>
/* Página doblada----------------------------------------------- */
#pageflip {
position: relative;
right: 0;
top: 0px; /* Cambiar a 30px si tienes la navbar (barra de navegación) */
float: right;
z-index:9;
}
#pageflip img {
width: 50px;
height: 52px;
z-index: 99;
position: absolute;
right: 0;
top: 0;
-ms-interpolation-mode: bicubic;
}
#pageflip .msg_block {
width: 50px;
height: 50px;
overflow: hidden;
position: absolute;
right: 0;
top: 0;
background: url(http:#PONERIMAGEN) no-repeat right top;
}
#pageflipMirror {
position: static;
right: 0;
top: 0;
float: right;
}
</style>


	</head>
	<body class="<?php /* echo exclude_categoria();*/ ?>">

<div id='pageflip'>
<a href='http://nombre-de-mi-blog.blogspot.com/atom.xml'>
<img src='http://lh3.googleusercontent.com/-E0DxKFTKzhU/UJiWdesl7UI/AAAAAAAADP4/9kK-z8646YA/s000/pagina-doblada.png' style='width: 50px; height: 52px; overflow-x: hidden; overflow-y: hidden;'/></a>
<div class='msg_block' style='width: 50px; height: 50px; overflow-x: hidden; overflow-y: hidden; '/>
</div>

	<div id="inv_cen">
		<div id="inv400"><?php //include("zon_ads/Zona_Inv_400.html");?></div>
	        <div id="inv800"><?php //include("zon_ads/Zona_Inv_800.html");?></div>
	</div>
	<div id="inv_sup">
		<div id="inv1000x100_A"><?php //include("zon_ads/Zona_Inv_1000x100_A.html");?></div>
	</div>
	<div id="inv_inf">
		<div id="inv1000x100_B"><?php //include("zon_ads/Zona_Inv_1000x100_B.html");?></div>
	</div>
		<div id="contenedor">
		<div class="espacio03"></div>
		<div class="sep"></div>
		<div class="espacio03"></div>
                        <div class="zon_pub">
                                <div id="Zona_A_988x60">
                                        <?php include("zon_ads/Zona_A_988x60.html");?>
                                </div>
                                <div id="Zona_A_aux_988x60">
                                        <?php include("zon_ads/Zona_A_aux_988x60.html");?>
                                </div>
                                <div id="Zona_A_2_988x90">
                                        <?php include("zon_ads/Zona_A_2_988x90.html");?>
                                </div>
                                <div id="Zona_A_aux_988x90">
                                        <?php include("zon_ads/Zona_A_aux_988x90.html");?>
                                </div>
                                <div id="Zona_A_3_988x150">
                                        <?php include("zon_ads/Zona_A_3_988x150.html");?>
                                </div>
                                <div id="Zona_A_aux_988x150">
                                        <?php include("zon_ads/Zona_A_aux_988x150.html");?>
                                </div>
                        </div>
			<div class="limpiar"></div>
			<div class="zon_pub">
                                <div id="Zona_B_778x60">
                                        <?php include("zon_ads/Zona_B_778x60.html");?>
                                </div>
				<div id="Zona_B_2_200x60">
					<?php include("zon_ads/Zona_B_2_200x60.html");?>
				</div>
			</div>
			<div class="limpiar"></div>
			<div class="zon_pub">
				<div id="Zona_C_778x90">
					<?php include("zon_ads/Zona_C_778x90.html");?>
				</div>
				<div id="Zona_C_2_200x90">
					<?php include("zon_ads/Zona_C_2_200x90.html");?>
				</div>
			</div>
                        <div class="zon_pub">
                                <div id="Zona_C_AUX_728x90">
					<?php if($val>5){include('zon_ads/Zona_C_728x90.html');}else{include('zon_ads/Zona_c_728x90.html');} ?>
                                </div>
                                <div id="Zona_C_AUX_260x90">
					<?php include("zon_ads/Zona_C_2_260x90.html");?>
                                </div>
                        </div>
			<div class="limpiar"></div>
			<div class="zon_pub">
				<div id="Zona_D_490x60">
					<?php include("zon_ads/Zona_D_490x60.html");?>
				</div>
				<div id="Zona_D_2_490x60">
					<?php include("zon_ads/Zona_D_2_490x60.html");?>
				</div>
                                <div id="Zona_D_aux_490x60">
                                        <?php include("zon_ads/Zona_D_aux_490x60.html");?>
                                </div>
                                <div id="Zona_D_2_aux_490x60">
                                        <?php include("zon_ads/Zona_D_2_aux_490x60.html");?>
                                </div>
                                <div id="Zona_D_490x90">
                                        <?php include("zon_ads/Zona_D_490x90.html");?>
                                </div>
                                <div id="Zona_D_2_490x90">
                                        <?php include("zon_ads/Zona_D_2_490x90.html");?>
                                </div>
                                <div id="Zona_D_aux_490x90">
                                        <?php include("zon_ads/Zona_D_aux_490x90.html");?>
                                </div>
                                <div id="Zona_D_2_aux_490x90">
                                        <?php include("zon_ads/Zona_D_2_aux_490x90.html");?>
                                </div>
			</div>
			<div class="limpiar"></div>
			<div class="espacio05"></div>
			<div class="sep"></div>
			<div class="espacio05"></div>
			<div class="cabezal">
				<div class="logo">
					<div id="redes">
						<a href="https://twitter.com/elinformadorve" alt="twitter" ><div class="tw" ></div></a>
						<a href="http://www.facebook.com/el.informador.barquisimeto" alt="facebook" ><div class="fb" ></div></a>
						<a href="http://www.elinformador.com.ve/feed" alt="rss" ><div class="rss" ></div></a>
						<a href="https://www.youtube.com/channel/UCPb4vjcbn4j0BQ_RQ-72X6Q" alt="youtube" ><div class="yt" ></div></a>
						<a href="https://instagram.com/elinformadorve" alt="Instagram" ><div class="it" ></div></a>
					</div>
					<div class="fecha">
						<script defer languaje="JavaScript">
							var mydate=new Date()
							var year=mydate.getYear()
							if (year < 1000)
							year+=1900
							var day=mydate.getDay()
							var month=mydate.getMonth()
							var daym=mydate.getDate()
							if (daym<10)
								daym="0"+daym
								var dayarray=new Array("Domingo,","Lunes,","Martes,","Miércoles,","Jueves,","Viernes,","Sábado,")
								var montharray=new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre")
								document.write("<font color='white'>"+dayarray[day]+" "+daym+" de "+montharray[month]+" de "+year+"</font>")
						</script>
					</div>
				</div>
			<?php include("includes/silueta.php");?>
			</div>
			<div id="con_menu">
				<div class="" id="menu">
					<div id="men_izq">
					<div id="men_ini"><a href="<?php echo home_url(); ?>"><img id="ico_hom" src="<?php ?>/wp-content/themes/InfoOrange-master/img/btn_home.png" /></a></div>
					<div id="men_con">
						<div id="men_barq_reg"><a href="<?php echo $men_cat; ?>lara">Lara</a></div>
							<div id="con_3_4">
								<div id="men_dep"><a href="<?php echo $men_cat; ?>nacionales">Nacionales</a></div>
								<div id="men_zon_soc"><a href="<?php echo $men_cat; ?>internacionales">Internacionales</a></div>
							</div>
						</div>
					</div>
				<div id="men_der">
					<div id="men_neg"><a class="men_link" href="<?php echo $men_cat; ?>negocios">Negocios</a></div>
						<div id="con_6_7">
							<div id="men_ven_mun"><a href="<?php echo $men_cat; ?>deportes">Deportes</a></div>
							<div id="men_suc"><a class="men_suc" href="<?php echo $men_cat; ?>sucesos">Sucesos</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="limpiar"></div>
			<div class="espacio03"></div>
			<div class="busqueda">
				<div id="cont_busc">
					<div class="buscador">
						<a class="noticia_linea" href="<?php echo home_url(); ?>">Noticias en Linea</a>
						<a class="label_buscador"><span>| </span>Buscador:</a>
					</div>
					<div class="buscador" id="buscadorinp">
						<form method="get" id="searchform" action="<?php bloginfo('home'); ?>">
						 <input type="text" value="<?php echo $search_text; ?>"
							 name="s" id="s"  onblur="if (this.value == '')  {this.value = '<?php echo $search_text; ?>';}"
							 onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" placeholder="buscar aquí" />
						 <input class="boton" id="bot_bus" type="submit" value="Buscar">
						</form>
					</div>
				</div>
			<div class="contacto">
		                <div id="tarifas"  ><a href="http://www.elinformador.com.ve/tarifas-3/">Tarifas <span> Consulte nuestras Tarifas </span></a></div>
		                <div id="contacto1"><a href="http://www.elinformador.com.ve/contacto/">Contáctenos <span> Su opinión nos interesa</span></a></div>
		                <div id="contacto2"><a href="http://www.elinformador.com.ve/quienes-somos/">Quiénes Somos <span > El Informador C.A.</span></a></div>
			</div>
			</div>
			<div class="espacio05"></div>
			<div class="sep"></div>
			<div class="espacio05"></div>
			<div id="marquesina">
				<div id="rapida"> <p>RÁPIDAS </p></div>
				<div id="marq_tit"> <?php include("includes/marquesina.php");?>	</div>
			</div>
			<div class="limpiar"></div>
				<div class="zon_pub">
					<div id="Zona_E_988x60">
						<?php include("zon_ads/Zona_E_988x60.html");?>
					</div>
                                        <div id="Zona_E_aux_988x60">
                                                <?php include("zon_ads/Zona_E_aux_988x60.html");?>
                                        </div>
                                        <div id="Zona_E_2_988x90">
                                                <?php include("zon_ads/Zona_E_2_988x90.html");?>
                                        </div>
                                        <div id="Zona_E_2_aux_988x90">
                                                <?php include("zon_ads/Zona_E_2_aux_988x90.html");?>
                                        </div>
				</div>
			<div class="limpiar"></div>
