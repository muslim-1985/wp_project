<?php get_header(); ?>
<aside>
	<div class="main">
       	<a href="#" class="btnPrev"><img src="<?php echo get_template_directory_uri() ?>/images/button-1.png" alt=""></a><a href="#" class="btnNext"><img src="<?php echo get_template_directory_uri() ?>/images/button-2.png" alt=""></a>
    	<div id="carousel">
            <ul id="myRoundabout">
							<?php $query = new WP_Query('cat=5'); ?>
							<?php if ( $query->have_posts() ) : ?>
							 <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								 	<li><?php the_post_thumbnail(); ?></li>
									<?php endwhile; ?>
									<?php else: ?>
						 	 <?php endif; ?>
            </ul>
          </div>
    </div>
</aside>
<div class="bg_cont1">
    <div class="bg_cont">
        <section id="content">
            <div class="main">
                <div class="inside">
                    <div class="container_16">
                        <div class="tail">
                            <div class="container">
															<?php $args2 = array('post_type'=>'book','category_name' => 'planing') ?>
															<?php $new_query = new WP_Query($args2) ?>
															<?php if($new_query->have_posts()): ?>
																<?php while ($new_query->have_posts()) :$new_query->the_post(); ?>
                                <div class="grid_4 alpha">
                                    <h2><?php the_title(); ?></h2>
                                    <?php the_content(); ?>
                                    <div class="container"><a href="<?php the_permalink(); ?>" class="link-1">more</a></div>
                                </div>
															<?php endwhile; ?>
														<?php else: ?>
														<?php endif; ?>
                            </div>
                        </div>
                        <div class="container">
                            <div class="grid_8 alpha">
                                <h2 class="h2"><?php echo get_cat_name(7);?></h2>
																<?php $args = array('post_type'=>'book','category_name' => 'uproad') ?>
																<?php $new_query = new WP_Query($args) ?>
																<?php if($new_query->have_posts()): ?>
																	<?php while ($new_query->have_posts()) :$new_query->the_post(); ?>
	                                	  <div class="container">
			                                    <?php the_post_thumbnail($size = 'post-thumbnail', $attr = array('class'=>'img-left')); ?>
			                                    <h4><?php the_title(); ?></h4>
			                                     <?php the_content(); ?>
			                                    <br class="clear" />
			                                </div>
																<?php endwhile; ?>
															<?php else: ?>
															<?php endif; ?>
                            </div>
                            <div class="grid_8 omega">
                                <h2  class="h2"><?php echo get_cat_name(8);?></h2>
																<?php $args1 = array('post_type'=>'book','category_name' => 'wats_new') ?>
																<?php $new_query = new WP_Query($args1) ?>
																<?php if($new_query->have_posts()): ?>
																	<?php while ($new_query->have_posts()) :$new_query->the_post(); ?>
	                                	 			  <div class="tail1">
						                                    <div class="container">
						                                        <div class="data">
						                                            <?php echo get_the_date('d'); ?>
																												<span><?php echo get_the_date('F'); ?></span>
						                                        </div>
						                                        <div class="indent1">
																											<h3><?php the_title(); ?></h3>
																											<?php the_content(); ?>
																										</div>
						                                    </div>
						                                </div>
																<?php endwhile; ?>
															<?php else: ?>
															<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php get_footer(); ?>
<script type="text/javascript">
   // <![CDATA[
   jQuery(document).ready(function() {
      jQuery('ul#myRoundabout').roundabout({
         shape: 'figure8'
      });

	  var cnn=[]
	jQuery('#myRoundabout li').each(function(){
		cnn.push(this)
	})

	var curr=0
	jQuery('.btnPrev').live('click',function(){
		if(curr<0)
			curr=cnn.length-1
		else
			curr--
		jQuery(cnn.slice(curr,curr+1)).trigger('click')
		return false
	})
	jQuery('.btnNext').live('click',function(){
		if(curr<cnn.length)
			curr++
		else
			curr=0
		jQuery(cnn.slice(curr,curr+1)).trigger('click')
		return false
	})
   });
   // ]]>
  </script>
</body>
</html>
