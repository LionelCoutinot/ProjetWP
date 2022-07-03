<?php get_header();?>

<div class="container" id="marg-projet">  <!-- Les prestations une par une -->
    <?php if( have_posts() ) :
        while ( have_posts() ) : the_post();?>
		    <div class="row">
		        <div class="col-12 col-md-10 offset-md-1  text-center mb-5">		
                    <h2 class="title2 pb-3"><?php the_title(); ?></h2>
				</div>
			</div>		  
    </div>   <!--ferme la div de  class="custom-background" de header.php--> 
        <div class="container" id="marg-projet">
		    <div class="row my-5 pt-5">
		        <div class="col-12  col-md-6 offset-md-3  mt-5">	
                    <?php the_content(); ?>
                </div>   				
		    </div> 
        </div>   
        <?php
        endwhile;
        else : 
            _e( 'Sorry, no posts matched your criteria.', 'devhub' );
        endif; ?>
		
	

  


<?php get_footer();?>