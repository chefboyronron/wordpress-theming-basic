<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<div class="thumbnail"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on : <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(); ?></small>
<p><?php the_excerpt(); ?></p>
<hr>