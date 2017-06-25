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
															<?php $new_query = new WP_Query('cat=6') ?>
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
                                <h2 class="h2">professional approach</h2>
																<?php if ( is_active_sidebar( 'true_side' ) ) : ?>


																			<?php dynamic_sidebar( 'true_side' ); ?>


																	<?php endif; ?>
                                <div class="container">
                                    <img alt="" src="<?php echo get_template_directory_uri() ?>/images/1page_img1.jpg" class="img-left" />
                                    <h4>Lorem ipsum dolor sit amet</h4>
                                    <p>Erat lacininec in vel ipsum aucvorpt felieaculis lacinia ictum ntumit.usce euiso onsequat ant psuolor sit conse ctetuer adipis cing elitell eorqm coue fertum niuccu diam. </p>
                                    <br class="clear" />
                                </div>
                                <div class="container">
                                    <img alt="" src="<?php echo get_template_directory_uri() ?>/images/1page_img2.jpg" class="img-left" />
                                    <h4>Vestibulum libero nisl porta</h4>
                                    <p>Lacinia ictum ntumit.usce euiso onsequat ant psuolor sit conse ctetuer adipis cing elitelrqm coue fertum niuccu diamd in lacus ut enim adipigqpede mi aliquet sit.</p>
                                    <br class="clear" />
                                </div>
                            </div>
                            <div class="grid_8 omega">
                                <h2  class="h2">what's new?</h2>
                                <div class="tail1">
                                    <div class="container">
                                        <div class="data">
                                            14<span>december</span>
                                        </div>
                                        <div class="indent1"><h3>Sed ut perspiciatis unde omnis</h3>Erat la cininec in vel ipsum auctorvorpt felieum iaculisy euisod consequat antpsum dolor sit conse ctetuer.</div>
                                    </div>
                                </div>
                                <div class="tail1">
                                    <div class="container">
                                        <div class="data">
                                            23<span>december</span>
                                        </div>
                                        <div class="indent1"><h3>Loreterdum vitaapius acllus</h3>Antpsum dolor sit conse ctetuer adipiscing elitellenteue sedlorquam coue ferm entum niuris accu diam. </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="data">
                                        05<span>december</span>
                                    </div>
                                    <div class="indent1"><h3>Sed ut perspiciatis unde omnis</h3>Erat la cininec in vel ipsum auctorvorpt felieum iaculisc euisod consequat antpsum dolor sit conse ctetuer.</div>
                                </div>
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
