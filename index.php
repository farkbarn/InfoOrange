<?php #CANTIDAD DE NOTAS POR COLUMNA
$max_A1=17;
$max_B1=0;
$max_A2=$max_A1+26;
$max_B2=$max_B1+0;
$ini_Acol2=$max_A1+1;
$ini_Bcol2=$max_B1+1;
$val=rand(1, 10);
?>
<?php get_header(); ?>
		<?php include("includes/slider_destacada.php");?>
				<div class="limpiar"></div>
					<div class="zon_pub">
						<div id="Zona_F_988x60">
                                                        <?php include("zon_ads/Zona_F_988x60.html");?>
                                                </div>
                                                <div id="Zona_F_aux_988x60">
                                                        <?php //include("zon_ads/Zona_F_aux_988x60.html");?>
                                                </div>
                                                <div id="Zona_F_2_988x90">
                                                        <?php include("zon_ads/Zona_F_2_988x90.html");?>
                                                </div>
                                                <div id="Zona_F_2_aux_988x90">
                                                        <?php //include("zon_ads/Zona_F_2_aux_988x90.html");?>
                                                </div>
					</div>
				<div class="limpiar"></div>
					<div class="espacio05"></div>
					<div class="sep"></div>
					<div class="espacio05"></div>
					<div class="noticias_sup">
						<div class="not_col_1">
<div>
<?php // include("includes/live.html"); ?>
</div>
							<div class="zon_pub">
								<div id="Zona_G_468x60">
									<?php //include("zon_ads/Zona_G_468x60.html");?>
								</div>
                                                                <div id="Zona_G_aux_468x60">
                                                                        <?php //include("zon_ads/Zona_G_aux_468x60.html");?>
                                                                </div>
							</div>
							<div class="zon_pub">
								<div id="Zona_H_468x100">
									<?php //include("zon_ads/Zona_H_468x100.html");?>
								</div>
                                                                <div id="Zona_H_aux_468x100">
                                                                        <?php //include("zon_ads/Zona_H_aux_468x100.html");?>
                                                                </div>
							</div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_I_468x250">
                                                                        <?php //include("zon_ads/Zona_I_468x250.html");?>
                                                                </div>
                                                                <div id="Zona_I_aux_468x250">
                                                                        <?php //include("zon_ads/Zona_I_aux_468x250.html");?>
                                                                </div>
                                                        </div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_J_468x350">
                                                                        <?php //include("zon_ads/Zona_J_468x350.html");?>
                                                                </div>
                                                                <div id="Zona_J_aux_468x350">
									<?php //include("zon_ads/Zona_J_aux_468x350_video.html");?>
                                                                </div>
                                                        </div>
							<div class="espacio05"></div>
							<div class="espacio05"></div>
						<?php query_posts('cat=13&posts_per_page='.$max_A1);
						$i=1;
						while ($i <= $max_A1):the_post();
						$nom_cat=exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<div class="nota_col1">
							<h2 class="tit_not"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2>
							<div class="con_fot_not_col1" >
							<?php if(has_post_thumbnail()): // si tiene imagen
								$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_col1', false );
							?>
								<a href="<?php echo $link;?>"> <img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
							<?php endif ?>
							</div>
							<p class="txt_not"> <span><?php the_time('h:i A');?> | <?php echo list_cat(); ?> </a> | </span><?php the_excerpt_max_charlength(180);?></p>
						</div>
						<div class="espacio05"></div>
						<div class="sep"></div>
						<div class="espacio05"></div>
						<?php $i++; endwhile; ?>
						<?php wp_reset_query(); ?>
						</div>
						<div class="not_col_2">
							<div class="zon_pub">
								<div id="Zona_K_200x200">
									<?php include("zon_ads/Zona_K_200x200.html"); ?>
									<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- test200x300 --><ins class="adsbygoogle"style="display:inline-block;width:200px;height:300px"data-ad-client="ca-pub-7524217459588616"data-ad-slot="9670307482"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
								</div>
                                                                <div id="Zona_K_aux_200x200">
                                                                        <?php include("zon_ads/Zona_K_aux_200x200.html"); ?>
                                                                </div>
								<div id="Zona_K_aux_200x200">
                                                                        <?php //include("zon_ads/Zona_k3_200x300.html");?>
                                                                </div>
							</div>
<!--							<div class="label_container">
								<div class="label_categoria"> Destacadas</div>
								<div class="flecha"></div>
							</div>
-->
							<div class="clear"></div>
							<div class="espacio05"></div>
							<?php query_posts('cat=13&posts_per_page='.$max_A2.'&offset='.$max_A1);
							$i=$ini_Acol2;
							while ($i <= $max_A2):the_post();
							$nom_cat=exclude_categoria();// obtengo nombre de cat
							$cat_id=get_cat_ID($nom_cat);// obtengo id con el nombre de cat
							$cat_link=get_category_link( $cat_id );//obtengo url por id de cat
							$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
							?>
							<div class="nota_col2">
								<div class="con_fot_not_col2" >
								<?php if(has_post_thumbnail()): // si tiene imagen
									$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_col2', false );
								?>
									<a href="<?php echo $link;?>"><img class="fot_not" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
								<?php endif ?>
								</div>
								<h2 class="tit_not"><a href="<?php echo $link;?>"><?php echo substr($tit,0,45);?><span> [...]</span></a></h2>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <?php echo list_cat();?> </a> | </span><?php the_excerpt_max_charlength(80);?></p>
							</div>
							<div class="espacio05"></div>
							<div class="sep"></div>
							<div class="espacio05"></div>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>
					</div>
					<div class="lateral">
					<div class="espacio05"></div>
                                                <div id="pdfs">
							<?php include("includes/edicion_impresa.html");?>
                                                </div>
						<div class="zon_pub">
                                                        <div id="Zona_L_300x250">
                                                                <?php //include("zon_ads/Zona_L_300x250.html"); ?>
                                                        </div>
                                                        <div id="Zona_M_300x300">
                                                                <?php //include("zon_ads/Zona_M_300x300.html");?>
                                                        </div>
                                                        <div id="Zona_N_300x600">
                                                                <?php include("zon_ads/Zona_N_300x600.html");?>
                                                        </div>
                                                        <div id="Zona_N_2_300x600">
                                                                <?php include("zon_ads/Zona_N_2_300x600.html");?>
                                                        </div>
                                                        <div id="Zona_L_300x250">
	                                                        <?php if($val>5){include('zon_ads/Zona_l_300x250.html');}else{include('zon_ads/Zona_l_300x250.html');} ?>
								<?php //include('zon_ads/Zona_l2_300x250.html'); ?>
                                                        </div>
                                                        <div id="Zona_Q_160x600">
								<?php include("zon_ads/Zona_CAT_n_300x600.html");?>
                                                        </div>
						</div>
						<div class="espacio05"></div>
						<div class="side">
							<?php if (!dynamic_sidebar('Sidebar Home'));?>
						</div>
					</div>
					<div class="limpiar"></div>
						<div class="zon_pub">
							<div id="Zona_O_988x60">
								<?php //include("zon_ads/Zona_O_988x60.html");?>
							</div>
                                                        <div id="Zona_O_aux_988x60">
                                                                <?php //include("zon_ads/Zona_O_aux_988x60.html");?>
                                                        </div>
                                                        <div id="Zona_O_2_988x90">
                                                                <?php //include("zon_ads/Zona_O_2_988x90.html");?>
                                                        </div>
                                                        <div id="Zona_O_2_aux_988x90">
                                                                <?php //include("zon_ads/Zona_O_2_aux_988x90.html");?>
                                                        </div>
						</div>
					<div class="limpiar"></div>
					<div class="espacio05"></div>
<!--					<div class="sep"></div> -->
					<div class="espacio05"></div>
					<div class="noticias_inf">
						<div class="not_col_1">
							<div class="zon_pub">
								<div id="Zona_G_2_468x60">
									<?php //include("zon_ads/Zona_G_2_468x60.html");?>
								</div>
                                                                <div id="Zona_G_2_aux_468x60">
                                                                        <?php //include("zon_ads/Zona_G_2_aux_468x60.html");?>
                                                                </div>
							</div>
							<div class="zon_pub">
								<div id="Zona_H_2_468x100">
									<?php //include("zon_ads/Zona_H_2_468x100.html");?>
								</div>
                                                                <div id="Zona_H_2_aux_468x100">
                                                                        <?php //include("zon_ads/Zona_H_2_aux_468x100.html");?>
                                                                </div>
							</div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_I_2_468x250">
                                                                        <?php //include("zon_ads/Zona_I_2_468x250.html");?>
                                                                </div>
                                                                <div id="Zona_I_2_aux_468x250">
                                                                        <?php //include("zon_ads/Zona_I_2_aux_468x250.html");?>
                                                                </div>
                                                        </div>
                                                        <div class="zon_pub">
                                                                <div id="Zona_J_2_468x350">
                                                                        <?php //include("zon_ads/Zona_J_2_468x350.html");?>
                                                                </div>
                                                                <div id="Zona_J_2_aux_468x350">
                                                                        <?php //include("zon_ads/Zona_J_2_aux_468x350.html");?>
                                                                </div>
                                                        </div>
							<?php query_posts('cat=22&posts_per_page='.$max_B1);
							$i=1;
							while ($i <= $max_B1):the_post();
							$nom_cat=exclude_categoria();// obtengo nombre de cat
							$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
							$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
							$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
							?>
							<div class="nota_col1">
								<h2 class="tit_not"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2>
								<div class="con_fot_not_col1" >
								<?php if(has_post_thumbnail()): // si tiene imagen
									$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_col1', false );
								?>
									<a href="<?php echo $link;?>"><img align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
								<?php endif ?>
								</div>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <?php echo list_cat();?> </a> | </span><?php the_excerpt_max_charlength(180);?></p>
							</div>
							<div class="espacio05"></div>
							<div class="sep"></div>
							<div class="espacio05"></div>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
							</div>
						<div class="not_col_2">
							<div class="zon_pub">
								<div id="Zona_K_2_200x200">
									<?php //include("zon_ads/Zona_K_2_200x200.html");?>
								</div>
                                                                <div id="Zona_K_2_aux_200x200">
                                                                        <?php //include("zon_ads/Zona_K_2_aux_200x200.html");?>
                                                                </div>
							</div>
<!--							<div class="label_container">
								<div class="label_categoria"> Destacadas</div>
								<div class="flecha"></div>
							</div>
-->
							<div class="clear"></div>
							<div class="espacio05"></div>
							<?php query_posts('cat=22&posts_per_page='.$max_B2.'&offset='.$max_B1);
							$i=$ini_Bcol2;
							while ($i <= $max_B2):the_post();
							$nom_cat=exclude_categoria();// obtengo nombre de cat
							$cat_id=get_cat_ID($nom_cat);// obtengo id con el nombre de cat
							$cat_link=get_category_link( $cat_id );//obtengo url por id de cat
							$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
							?>
							<div class="nota_col2">
								<div class="con_fot_not_col2" >
								<?php if(has_post_thumbnail()): // si tiene imagen 
									$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_col2', false );
								?>
									<a href="<?php echo $link;?>"><img class="fot_not" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" /></a>
								<?php endif ?>
								</div>
								<h2 class="tit_not"><a href="<?php echo $link;?>"><?php echo substr($tit,0,45)?><span> [...]</span></a></h2>
								<p class="txt_not"> <span><?php the_time('h:i A');?> | <?php echo list_cat();?> </a> | </span><?php the_excerpt_max_charlength(80);?></p>
							</div>
							<div class="espacio05"></div>
							<div class="sep"></div>
							<div class="espacio05"></div>
							<?php $i++; endwhile; ?>
							<?php wp_reset_query(); ?>
						</div>
					</div>
					<div class="lateral">
<!--                                                <div id="pdfs">
                                                                <?php //include("includes/edicion_impresa.html");?>
                                                </div>
-->
	                                        <div class="espacio05"></div><div class="espacio05"></div>
						<div class="zon_pub">
                                                        <div id="Zona_L_2_300x250">
                                                                <?php //include("zon_ads/Zona_L_2_300x250.html");?>
                                                        </div>
                                                        <div id="Zona_M_2_300x300">
                                                                <?php //include("zon_ads/Zona_M_2_300x300.html");?>
                                                        </div>
                                                        <div id="Zona_N_2_300x600">
                                                                <?php //include("zon_ads/Zona_N_2_300x600.html");?>
                                                        </div>
						</div>
						<div class="limpiar"></div><div class="espacio05"></div>
						<div class="side">
							<?php //if (!dynamic_sidebar('Sidebar Home Dos'));?>
						</div>

                                                <div class="zon_pub">
                                                        <div id="Zona_R_336x280">
                                                                <?php //include("zon_ads/Zona_R_ads_336x280.html");?>
                                                        </div>
                                                </div>
					</div>
					<div class="limpiar"></div>
					<div class="espacio05"></div>

<?php /*VIDEO SLIDER*/ ?>
<?php
/* <script type="text/javascript">
var ut_params = ut_params || [];ut_params.push("UT-170718233");
(function() {var ut = document.createElement('script'); ut.type = 'text/javascript'; ut.async = true;
ut.src = (("https:" == document.location.protocol) ? "https://" : "http://") + 'app.ubertags.com/javascripts/ubertags.js';
var script = document.getElementsByTagName('script')[0]; script.parentNode.insertBefore(ut, script);})();
</script>*/
?>

<?php get_footer(); ?>

