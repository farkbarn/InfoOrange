<?php get_header();?>
<?php $nom_wid='Sidebar Categoria';?>
<?php $max=13;?>
<!-- NOTICIAS PRIMERA MITAD -->
					<div class="noticias_sup not_post">
					<div class="espacio03"></div>
						<div class="not_col_1"><!--abre columna 1 -->
							<div class="zon_pub">
								<div id="Zona_G_468x60">
									<?php include("zon_ads/Zona_CAT_G_468x60.html");?>
								</div>
                                                                <div id="Zona_G_aux_468x60">
                                                                        <?php include("zon_ads/Zona_CAT_G_aux_468x60.html");?>
                                                                </div>
							</div>
							<div class="zon_pub">
								<div id="Zona_H_468x100">
									<?php include("zon_ads/Zona_CAT_H_468x100.html");?>
								</div>
                                                                <div id="Zona_H_aux_468x100">
                                                                        <?php include("zon_ads/Zona_CAT_H_aux_468x100.html");?>
                                                                </div>
							</div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_I_468x250">
                                                                        <?php include("zon_ads/Zona_CAT_I_468x250.html");?>
                                                                </div>
                                                                <div id="Zona_I_aux_468x250">
                                                                        <?php include("zon_ads/Zona_CAT_I_aux_468x250.html");?>
                                                                </div>
                                                        </div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_J_468x350">
                                                                        <?php include("zon_ads/Zona_CAT_J_468x350.html");?>
                                                                </div>
                                                                <div id="Zona_J_aux_468x350">
                                                                        <?php include("zon_ads/Zona_CAT_J_aux_468x350.html");?>
                                                                </div>
                                                        </div>
						<!-- inicio de nota -->
<?php
//$prueba=new WP_QUERY('posts_per_page=13');
//while ($prueba->have_posts()) : $prueba->the_post();
?>
						<?php while (have_posts()) : the_post();
						$nom_cat=exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<div class="nota_col1">
							<!--<div class="lin_nar"></div>-->
							<h2 class="tit_not"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2>
							<div class="con_fot_not_col1" >
							<?php if(has_post_thumbnail()): // si tiene imagen
								$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_col1', false );
							?>
								<a href="<?php echo $link;?>"> <img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
							<?php endif ?>
							</div>
<p class="txt_not"> <span><?php the_time('h:i A');?> | <?php echo list_cat();?> </a> | </span><?php the_excerpt_max_charlength(180);?></p>
						</div>
						<div class="espacio05"></div>
<!--						<div class="sep"></div> -->
						<div class="espacio05"></div>
						<?php
							$id_cat=id_categoria();
							endwhile;
						?>
						<?php wp_reset_query(); ?>
						<center> <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></center>
						</div> <!--cierra columna 1 -->
						<?php include("col2.php");?>
					</div><!-- FIN NOTICIA -->

                                                <div class="espacio05"></div>
                                                <div class="sep"></div>
                                                <div class="espacio05"></div>

<div class="lateral">
	<div class="zon_pub">
		<div id="Zona_CAT_Q_2_160x600">
        		<?php //include("zon_ads/Zona_ads_Q_category.html"); ?>
        	</div>
	</div>
</div>
						<?php include("widget.php");?>
<?php get_footer(); ?>
