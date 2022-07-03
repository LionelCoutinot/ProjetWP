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


    <?php if( have_posts() ) :
    while ( have_posts() ) : the_post();?>
		<div class="row">
		    <div class="col-12 col-md-10 offset-md-1  text-center">		
                <h2 class="title2 pb-3"><?php the_title(); ?></h2>
			 </div>
		 </div>
</div>  <!--ferme la div de  class="custom-background" de header.php--> 
<div class="container" id="marg-projet">

		<div class="row my-5 col-12  col-md-10 offset-md-1 margin-projet" >
		    <div class="col-12 col-md-5 mt-5"> 
                <h4><?php the_field('titrep'); ?></h4>
                 <p class="pt-2"> <?php the_field('contenup'); ?></p> 
		    </div>
            <div class="col-12 col-md-5 mt-5">
                <div class="mt-5 ml-3 text-end">
                    <img src="<?php the_field('imagep'); ?>" class="img-fluid">                     
                </div>
		    </div >
			<div class="text-center mt-5">
				<p>___________________________________________</p>
			</div>
        </div>
        <div class="row  col-12  col-md-10 offset-md-1  my-4">
			<div class="col-12 col-md-5">
                <div class="my-5 ml-3">
                    <img src="<?php the_field('imagepbis'); ?>" class="img-fluid">
                 </div>
		    </div>
		    <div class="col-12 col-md-5">
                <h4><?php the_field('titrepbis'); ?></h4>
                <p class="pt-2"> <?php the_field('contenupbis'); ?></p> 
		    </div>
			<hr  class="mt-4"/>	
        </div>
            		
        <?php         endwhile;
        else : 
            _e( 'Sorry, no posts matched your criteria.', 'devhub' );
    endif; ?>
		
	<div class="row col-12  col-md-10 offset-md-1">
	    <div class="col">
		    <h2>Related projects</h2>
		</div>	
	</div>
	<div class="row col-12  col-md-10 offset-md-1 mt-2">
	    <?php if( $my_query1->have_posts() ) :
		    while( $my_query1->have_posts() ) : $my_query1->the_post();?>  
		        <div class="col-12  col-md-4 mb-4">	
				    <div class="text-center">
                        <?php the_post_thumbnail();?>
		            </div>
				    <div>
                        <?php the_title();?>
		            </div>
				    <div>
                        <a href="<?php the_permalink();?>">Lien</a>
		            </div>
                </div>
        <?php  endwhile;
        endif;
        // On réinitialise à la requête principale (important)
        wp_reset_postdata();?>
	</div> 
   

</div>

 <?php get_footer();?>


