<?php get_header();
if (!function_exists('get_field'))return;
$args = array(
    'post_type' => 'projet',
    'posts_per_page' => 3,
);

if (!function_exists('get_field'))return;
$args2 = array(
   'post_type' => 'post',
    'taxonomy' => 'article',
    'posts_per_page' => 4,
);
$my_query1 = new WP_Query( $args );
$my_query2 = new WP_Query( $args2 );

?>


    <?php if( have_posts() ) :
        while ( have_posts() ) : the_post();?>
            <div class="row">
		        <div class="col-12 col-md-10  offset-md-1 pt-4 text-center">	
				    <h2 class="title uppercase"><?php the_title(); ?></h2>
			    </div>
		    </div>
</div> <!--ferme la div de  class="custom-background" de header.php--> . 
<div class="container"  id="marg-projet">
	<div class="row mt-5 mb-2">			    
		<div class="col-12  col-md-10 offset-md-1  opacity">	
            <?php the_content(); ?>
		</div> 
    </div>
    <div class="row mt-5 col-12  col-md-10 offset-md-1" id="background-smoke">
        <hr />
	    <div class="col-12 col-md-6">  
            <h3><?php the_field('titre'); ?></h3>
            <p class="pt-2"> <?php the_field('contenu'); ?></p>                    
            <p><a href="<?php the_field('lien'); ?>" class="btn btn-primary">Link</a></p>
	    </div>
        <div class="col-12 col-md-6">
            <div class="mt-3 ml-3 text-end">
				<?php 
                    $image = get_field('image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif;
                ?>
            </div>
		</div>
		<hr />
    </div> 
    <div class="row  col-12  col-md-10 offset-md-1 mt-2">
		<div class="col-12 col-md-6"> 
             <div class="mt-3">
                <?php 
                    $image2 = get_field('image2');
                    if( !empty( $image2 ) ): ?>
                        <img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                     <?php endif;
                ?>
            </div>
        </div>
        <div class="col-12 col-md-6  mt-2"> 
            <h3><?php the_field('titre2'); ?></h3>
            <p class="pt-2"> <?php the_field('contenu2'); ?></p>                    
            <p><a href="<?php the_field('lien2'); ?>" class="btn btn-primary">Link</a></p>
		</div>
		<hr />
    </div>
	<div class="row col-12  col-md-10 offset-md-1 mt-2" id="background-smoke">
        <div class="col-12 col-md-6">  
            <h3><?php the_field('titre3'); ?></h3>
            <p class="pt-2"> <?php the_field('contenu3'); ?></p>                    
            <p><a href="<?php the_field('lien3'); ?>" class="btn btn-primary">Link</a></p>
		</div>
        <div class="col-12 col-md-6 text-end">
            <div class="mt-3">
                <?php 
                    $image3 = get_field('image3');
                    if( !empty( $image3 ) ): ?>
                        <img src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
                    <?php endif;
                ?>
            </div>
        </div>
		<hr />
    </div>		
        <?php  endwhile;
        else : 
        _e( 'Sorry, no posts matched your criteria.', 'devhub' );
    endif; ?>
	<div class="row col-12  col-md-10 offset-md-1 mt-2">
	    <?php if( $my_query1->have_posts() ) :
		    while( $my_query1->have_posts() ) : $my_query1->the_post();?>  
		        <div class="col-12  col-md-4">	
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
        <hr class="my-2"/>
	</div> 
    <div class="row col-12  col-md-10 offset-md-1 mt-2" id="background-smoke">
	    <div class="col">
		    <h2 class="pb-3">Get en touch</h2>
		    <form>               
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">	
                <div class="col-6 offset-3 text-center mt-3 mb-4 d-grid">				
			        <button  class="btn btn-primary" type="submit">Button</button>
                </div>				
            </form>			   
        </div>
		<hr />
	</div>
    <div class="row col-12  col-md-10 offset-md-1 mt-2 mb-4">
	    <?php if( $my_query2->have_posts() ) :
		    while( $my_query2->have_posts() ) : $my_query2->the_post();?>  
		        <div class="col-12  col-md-3">	
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

