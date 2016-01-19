<?php get_header();?>
<?php $nom_wid='Sidebar Busqueda';?>
<?php $max=14;?>
<!-- NOTICIAS PRIMERA MITAD -->
					<div class="noticias_sup not_post">
					<div class="espacio03"></div>
						<div class="not_col_1"><!--abre columna 1 -->
						<!-- inicio de nota -->   
						<?php if (have_posts()) : while (have_posts()) : the_post();
						$nom_cat = exclude_categoria();// obtengo nombre de cat
						$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
						$cat_link = get_category_link($cat_id);//obtengo url por id de cat
						$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
						?>
						<article class="nota_col1" >
							<header><h2 class="tit_not tit_post"><a href="<?php echo $link;?>"> <?php echo $tit;?> </a></h2></header></ br></ br>
							<?php if(has_post_thumbnail()): // si tiene imagen 
							$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', false );
							?>
							<img class="fot_not" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit;?>" width="100%" height="100%" />
							<?php endif ?>
							<p class="txt_not"><span><?php the_time('d/m/Y - h:i A');?> | <a href="<?php echo $cat_link;?>"><?php echo $nom_cat;?></a> | </span><?php the_excerpt_max_charlength(100);?></p>
						</article> 
						<!-- fin de nota -->
						<div class="espacio05"></div>
						<div class="sep"></div>
						<div class="espacio05"></div>
						<?php endwhile; else: ?>
						<h2>No encontrado</h2>
						<p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
						<?php endif; ?>
						<center> <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></center>
						<?php wp_reset_query(); ?>
						</div> <!--cierra columna 1 -->
						<?php include("col2.php");?>
					</div><!-- FIN NOTICIA -->
						<?php include("widget.php");?>
<!-- NOTICIAS SEGUNDA MITAD -->
<?php get_footer(); ?>
