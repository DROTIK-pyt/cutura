<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themerage
 */

?>
<div id="post-<?php the_ID(); ?>" class="article">
	<div class="container">
		<div class="row col-md-offset-2">
			<div class="col-xs-12 col-md-10">
				<?php the_content(); ?>
				<?= get_the_author_posts_link(); ?></p>
			</div>
		</div>
	</div>
</div>
				
				
<!-- #post-<?php the_ID(); ?> -->
