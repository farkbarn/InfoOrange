				<div id="silueta">
						<?php query_posts('cat=504&posts_per_page=4'); 
						$i=1;
						while (have_posts()):the_post();
						?>
					<article id="cont_silueta">
					<div id="sil_izq">
						<div id="img_sil">
						<?php if(has_post_thumbnail()): // si tiene imagen 
							$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_sil2', false );
						?>
							<a href="<?php the_permalink();?>"> <img class="img_sil_2" align="center" src="<?php echo $pimagen[0];?>" alt="<?php the_title();?>" width="100%" height="100%" /></a>
						<?php endif ?>
						</div>
					</div>
					<div id="sil_der">
						<div id="txt_sil">
							<div id="tit_sil_cod">
								<div class="tit_sil"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
							</div>
							<div id="ext_sil_cod">
								<div class="ext_sil"><?php the_excerpt_max_charlength(75);?></div>
							</div>
						</div>
					</div>
					</article>
						<?php endwhile;
						wp_reset_query();?>
				</div>
