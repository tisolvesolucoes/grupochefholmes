<?php
/**
 * Template part for displaying posts
 *
 * @subpackage Organic Farm
 * @since 1.0
 */
?>

<div id="Category-section" class="entry-content w-100">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="postbox smallpostimage p-2 mb-3">
			<h3 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php
                if(has_post_thumbnail()) { ?>
		        <div class="box-content text-center">
	            	<?php the_post_thumbnail(); ?>
	            </div>
	        <?php }?>
        	<div class="overlay pt-2 text-center">
        		<div class="date-box mb-2">
        			<span class="mr-2"><i class="far fa-calendar-alt mr-2"></i><?php the_time( get_option( 'date_format' ) ); ?></span>
        			<span class="entry-author mr-2"><i class="far fa-user mr-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
      				<span class="entry-comments"><i class="fas fa-comments mr-2"></i> <?php comments_number( __('0 Comments','organic-farm'), __('0 Comments','organic-farm'), __('% Comments','organic-farm')); ?></span>
    			</div>
        		<p><?php the_excerpt();?></p>
        	</div>
	      	<div class="clearfix"></div>
	  	</div>
	</div>
</div>