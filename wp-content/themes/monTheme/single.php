<?php 

get_header();
if (!function_exists('get_field'))return;
$args = array(
    'post_type' => 'projet',
    'posts_per_page' => 3,
);
$my_query1 = new WP_Query( $args );
//$queried = get_queried_object();
//var_dump($queried);
?>

    <div class="container" id="marg-projet">
	    <div class="row">
		    <div class="col-12 col-md-10 offset-md-1   text-center">		
                <h2 class="title pb-3">BLOG</h2>
			</div>
		</div>
	</div>
</div>	<!--ferme la div de  class="custom-background" de header.php--> 
         <?php if( have_posts() ) :
            while ( have_posts() ) : the_post();?>
	<div class="container">
		            <div class="row">
		                <div class="col-12 col-md-10 offset-md-1 margin-projet text-center">		
                            <h2 class="title-blog pb-3"><?php the_title(); ?></h2>
				        </div>
			        </div>
		            <div class="row col-md-10 offset-md-1">
				        <div class="col-md-6 text-start text-muted author">
					        <p><?php the_author(); ?></p>
        	            </div>
				        <div class="col-md-6 text-end text-muted">
					        <p class="">Article mis en ligne le <?php the_time('d/m/Y'); ?> à <?php the_time(); ?></p> 
				        </div>
		            </div>
		            <div class="row col-md-10 offset-md-1  mb-5">
		                <div class="col-12  text-start">		
                            <span class="text-start pb-3 category"><?php the_category(); ?></span>
        	            </div>
		            </div>
			        <div class="row mt-5">
		                <div class="col-12 col-md-10 offset-md-1">	
                            <?php the_content(); ?>
		                </div>
				         <hr class="my-5"/>
		            </div>  
				</div>	
            <?php     endwhile;
            else : 
                _e( 'Sorry, no posts matched your criteria.', 'devhub' );
        endif; ?>
	


<?php get_footer();?>