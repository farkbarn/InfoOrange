<?php get_header();?>
<?php $nom_wid='Sidebar Pagina';?>
<?php
$max=5;
$val=rand(1, 10);
?>
<?php /*<!-- NOTICIAS PRIMERA MITAD -->*/ ?>
					<div class="noticias_sup not_post">
					<div class="espacio03"></div>
						<div class="not_col_1"> <?php /*<!--abre columna 1 -->*/ ?>
							<div class="zon_pub">
								<div id="Zona_G_468x60">
									<?php include("zon_ads/Zona_NOT_G_468x60.html");?>
								</div>
                                                                <div id="Zona_G_aux_468x60">
                                                                        <?php include("zon_ads/Zona_NOT_G_aux_468x60.html");?>
                                                                </div>
							</div>
							<div class="zon_pub">
								<div id="Zona_H_468x100">
									<?php include("zon_ads/Zona_NOT_H_468x100.html");?>
								</div>
                                                                <div id="Zona_H_aux_468x100">
                                                                        <?php include("zon_ads/Zona_NOT_H_aux_468x100.html");?>
                                                                </div>
								<div id="Zona_H_aux_468x100">
									<?php /*include("zon_ads/Zona_NOT_I_ads_468x100.html");*/ ?>
								</div>
							</div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_I_468x250">
                                                                        <?php include("zon_ads/Zona_NOT_I_468x250.html");?>
                                                                </div>
                                                                <div id="Zona_I_aux_468x250">
                                                                        <?php include("zon_ads/Zona_NOT_I_aux_468x250.html");?>
                                                                </div>
                                                        </div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_J_468x350">
			                                                <?php if($val>5){include('zon_ads/Zona_j_468x100.html');}else{include('zon_ads/Zona_j_468x100.html');} ?>
                                                                        <?php include("zon_ads/Zona_NOT_J_468x350.html");?>
                                                                </div>
                                                                <div id="Zona_J_aux_468x350">
                                                                        <?php include("zon_ads/Zona_NOT_J_aux_468x350.html");?>
                                                                </div>
                                                        </div>
						<?php /*<!-- inicio de nota -->*/ ?>
						<?php if (have_posts()) : while (have_posts()) : the_post();
						$nom_cat=exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<article class="nota_col1" >
							<header><h2 class="tit_not tit_post"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2></header>
							<p class="txt_not"> <span><?php the_time('d/m/Y - h:i A');?> | <?php echo list_cat();?> </a> | </span><?php the_excerpt_max_charlength(500);?></br> </br><?php the_content('Read the rest of this entry &raquo;'); ?></p>
						</article>
					<div id="Zona_J_aux_468x350">
						<?php if($val>5){include('zon_ads/Zona_j_468x100.html');}else{include('zon_ads/Zona_j_468x100.html');} ?>
					</div>
						<div id="fb-root"></div>
							<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
						<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="10" data-width="465"></div>
						<?php /* <!-- fin de nota --> */ ?>
						<div class="espacio05"></div>
						<div class="sep"></div>
						<div class="espacio05"></div>
						<?php endwhile; endif;?>
						<?php wp_reset_query(); ?>
						</div><?php /* <!--cierra columna 1 --> */ ?>
						<?php include("col2.php");?>
					</div><?php /* <!-- FIN NOTICIA --> */ ?>
<div class="lateral">
        <div class="zon_pub">
                <div id="Zona_CAT_Q_2_160x600">
                        <?php //include("zon_ads/Zona_ads_Q_single.html");?>
                </div>
        </div>
</div>
						<?php include("widget.php");?>
<?php get_footer(); ?>
