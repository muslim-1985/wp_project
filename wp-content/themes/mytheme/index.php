<?php get_header(); ?>
<aside>
	<div class="main">
       	<a href="#" class="btnPrev"><img src="<?php echo get_template_directory_uri() ?>/images/button-1.png" alt=""></a><a href="#" class="btnNext"><img src="<?php echo get_template_directory_uri() ?>/images/button-2.png" alt=""></a>
    	<div id="carousel">
            <ul id="myRoundabout">
              <!-- <li><img src="<?php echo get_template_directory_uri() ?>/images/slide1.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri() ?>/images/slide3.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri() ?>/images/slide4.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri() ?>/images/slide5.jpg" alt="" /></li>
              <li><img src="<?php echo get_template_directory_uri() ?>/images/slide2.jpg" alt="" /></li> -->
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
                                <div class="grid_4 alpha">
                                    <h2>machinery</h2>
                                    <p class="p2">Mdrerit sit amet tinunt ac verra selorta diam eu massisqu dia loreterdum vitaapibu ac scuitae ec eget tellus non et lacininec in vel ipsum auctorv felieum iaculis lacinia ictm elementum velit.usce euisoons.</p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                                <div class="grid_4">
                                    <h2>electricity</h2>
                                    <p class="p2">Loreterdum vitaapius ac uite ec eget tellus non erat lacininec in vel ipsum auctorvorpt felieum iaculis lacinia ictum eleentum velit.usce euisod consequat antpsum dolor sit consectetuer adipiscing elitellentes.</p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                                <div class="grid_4">
                                    <h2>planning</h2>
                                    <p class="p2">Mdrerit sit amet tinunt aiverra selorta diam eu massisque dia loreterdum vitaapibus acuitae ec eget tellus non erat lac ininec in vel ipsum auctorvorpt felieum iaculis lacinia ictum elementum velit.</p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                                <div class="grid_4 omega">
                                    <h2>production</h2>
                                    <p class="p2">In vel ipsum auctorvorpt lieum iaculis lacinia ictum elementum velit.usce euisod consequat antpsum dolor sit consectetuer adipiscing elitellentesque sed dolor. Aliquam congue fer mentum nisl. </p>
                                    <div class="container"><a href="#" class="link-1">more</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="grid_8 alpha">
                                <h2 class="h2">professional approach</h2>
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
