			<div class="destacada">
				<div class="slider">
					<div id="content-slider">
							<div id="slider">
								<div id="mask">
								<ul>
									<?php
										$clases =array("firstanimation","secondanimation","thirdanimation","fourthanimation","fifthanimation");
										$ides =array("first","second","third","fourth","fifth");
										$slidecat = get_option("sucesos");
										$slidecount = get_option("5");
									?>
									<?php query_posts('cat=16&posts_per_page=8');
									$i=1;
									while ($i <= 5):the_post(); /*( have_posts() ) : the_post();*/
									$nom_cat=exclude_categoria();// obtengo nombre de cat
									$cat_id = get_cat_ID($nom_cat);// obtengo id con el nombre de cat
									$cat_link = get_category_link( $cat_id );//obtengo url por id de cat
									$link=get_permalink(); $tit=get_the_title(); // obtengo link y titulo
									?>
									<li id="<?php echo $ides[$i-1]; ?>" class="<?php echo $clases[$i-1]; ?>">
										<a href="<?php echo $link;?>">
										<?php if(has_post_thumbnail()): // si tiene imagen 
											$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_slid1' , false );  // capturando arreglo url, ancho, alto
										?>
											<img align="center" class="img_slid1" src="<?php echo $pimagen[0];?>" alt="<?php the_title(); ?>" width="100%" height="100%" />
										<?php endif ?>
										</a>
										<div class="tooltip">
										<a href="<?php echo $link;?>"><h1><?php the_title();?></h1></a>
										<p><span><?php the_time('d:m Y');?> | <?php echo list_cat(); ?> </a> | </span><?php the_excerpt_max_charlength(150);?></p>
										</div>
									</li>
									<?php $i++; endwhile; ?>
								</ul>
								</div>
								<div class="progress-bar"></div>
							</div>
					</div>
				</div>
			</div>
				<div class="post_slider">
					<?php
					$i=6;
					while ($i <= 8):the_post(); /*( have_posts() ) : the_post();*/
					$tit=get_the_title();
					?>
					<div class="post_not">
						<?php if(has_post_thumbnail()): // si tiene imagen 
							$pimagen =  wp_get_attachment_image_src( get_post_thumbnail_id(), 'img_slid2' , false );  // capturando arreglo url, ancho, alto
						?>
						<a href="<?php the_permalink(); ?>"><img class="post_not_fot" align="center" src="<?php echo $pimagen[0];?>" alt="<?php echo $tit; ?>" width="100%" height="100%" /></a>
						<?php endif ?>
						<div class="post_not_txt"><a href="<?php the_permalink(); ?>"><?php echo substr($tit,0,40)?><span> [...]</span></a></div>
					</div>
					<?php $i++; endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
