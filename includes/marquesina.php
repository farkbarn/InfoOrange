<?php $MaxMar=10;
query_posts(array('category__not_in'=>array($cat_id,12,10,20,405,406,407,530,420,373,19),'post__not_in'=>array($idpost),'posts_per_page'=>$MaxMar));
					/*query_posts('cat=21&posts_per_page=3');*/
					while (have_posts()):the_post();
					?>
					<article>
						<a href="<?php the_permalink();?>"><?php the_title();?></a>
					</article>
					<?php endwhile;
					wp_reset_query();?>
