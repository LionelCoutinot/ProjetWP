<?php get_header(); ?>

   
        <div class="row mb-4">
		    <div class="col-12 col-md-10 offset-md-1 text-center">
			    <h2 class="title2 pt-4 mb-5">Nos projets</h2>
			</div>
        </div> 
</div> <!--ferme la div de  class="custom-background" de header.php--> .
    <div class="container" id="marg-projet"> <!-- affichage de tous les projets -->   
		<div class="row pb-5 mb-4 margin-projet">
            <?php if( have_posts() ) :			
                while ( have_posts() ) : the_post();?>
                    <div class="col-12 col-md-4 text-center">
                        <div class="px-5 py-3">
                            <h2 class="text-danger mb-3"><?php the_title(); ?></h2> 
                            <?php the_post_thumbnail();?>			
                            <h5><a href="<?php the_permalink(); ?>" class="btn btn-primary mt-4">Voir le contenu</a></h5>
			 	        </div>
                    </div>
            <?php
                endwhile;
            else : 
                 _e( 'Sorry, no posts matched your criteria.', 'devhub' );
            endif; ?>
        </div>
    </div>
    
   
<?php get_footer(); ?>