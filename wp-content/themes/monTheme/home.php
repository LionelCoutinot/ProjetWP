<?php get_header();?>

<div class="container" id="marg-projet"> <!-- les pages blog une par une -->
    <div class="row">
		<div class="col-12 col-md-10 offset-md-1  text-center">
			<p class="title uppercase">Blog</p>
		</div>
	</div>
</div>
</div> <!--ferme la div de  class="custom-background" de header.php--> 
<div class="container margin-projet"> 	
    <?php if( have_posts()) :
        while ( have_posts() ) : the_post();?>
			<div class="row mb-5">
		        <div class="col-12 col-md-10 offset-md-1   text-center">		
                    <h2 class="title-blog pb-3"><?php the_title(); ?></h2>
				</div>
			</div>

		    <div class="row col-md-10 offset-md-1  mb-5">
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
            <div class="row">
		        <div class="col-12 col-md-10 offset-md-1   text-center">	
		            <?php the_post_thumbnail(); ?>
		        </div>
		    </div> 
		    <div class="row mt-5">
		        <div class="col-12 col-md-10 offset-md-1">
					<?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>
                </div> 
             	<hr class="my-5"/>		
           </div>				
    <?php
        endwhile;
        else : 
            _e( 'Sorry, no posts matched your criteria.', 'devhub' );
        endif; ?>
		
	

</div>

<?php get_footer();?>