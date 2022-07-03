<?php get_header();?>

   
        <div class="row">
		    <div class="col-12 col-md-10 offset-md-1 text-center">		
                <h2 class="title2 pt-4 pb-3">Contact</h2>
			</div>
		</div>
 </div>   <!--ferme la div de  class="custom-background" de header.php--> 
    <div class="container" id="marg-projet">   
		<div class="row margin-projet">
		    <div class="col-12 col-md-6 my-4">	
                <?php if( have_posts() ) :
                    while ( have_posts() ) : the_post();?>		    
	                    <div class="border rounded px-3 pt-2"  id="background-smoke"><?php the_content(); ?></div>  
                    <?php 
                    endwhile;
                else : 
                   _e( 'Sorry, no posts matched your criteria.', 'devhub' );
                endif; ?>
		    </div>
		    <div class="col-12 col-md-6 my-4">	
                <div class=" border rounded px-3 pt-1"  id="background-smoke">
					<h2 class="mt-2">EVENT MANAGING</h2> 
			    	<h3>10 rue Perlinpinin <br /> BIRIBI-les-OIES</h3>
		            <h3 class="mt-2 mb-3">Tel : 00-00-00-00</h3>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>