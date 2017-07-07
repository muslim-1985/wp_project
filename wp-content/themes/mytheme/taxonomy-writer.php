<?php get_header(); ?>
<div class="bg_cont1">
    <div class="bg_cont">
        <section id="content">
            <div class="main">
                <div class="inside">
                  <?php $term_id = 29;
                        $taxonomy = 'cat';
                        $term = get_term( $term_id, $taxonomy ); ?>
                	<h2><?php echo $term->name; ?></h2>
                    <div class="container_16">
                        <div class="tail2">
                            <div class="container">
																<?php $args = array(
                                                     'tax_query' => array(
                                                                      		array(
                                                                      			'taxonomy' => 'cat',
                                                                            'field' => 'slug',
                                                                      			'terms' => 'work'
                                                                      		)
                                                                      	)) ?>
																<?php $new_query = new WP_Query($args) ?>
																<?php if($new_query->have_posts()): ?>
																	<?php while ($new_query->have_posts()) :$new_query->the_post(); ?>
	                                	  <div class="grid_5 alpha">
			                                    <a href="<?php the_permalink()?>">
                                            <?php the_post_thumbnail($size = 'post-thumbnail', $attr = array('class'=>'img-indent')); ?>
                                          </a>
			                                    <strong class="txt"><?php the_title(); ?></strong><br>
			                                     <?php the_content(); ?>
			                                    <br class="clear" />
			                                </div>
																<?php endwhile; ?>
															<?php else: ?>
															<?php endif; ?>
                            </div>
                        </div>
                        <div class="container">
                            <div class="grid_8 alpha">
                                <div class="suffix_1">
                                <?php if ( have_posts() ) : ?>
                                	<?php while ( have_posts() ) : the_post(); ?>
                                	    <div class="container tail3">
                                        <?php the_post_thumbnail($size = 'post-thumbnail', $attr = array('class'=>'img-left1'));?>
                                        <div class="indent2">
                                          <h4><?php the_title(); ?></h4>
                                          <?php
                                          $cur_terms = get_the_terms( $post->ID, 'writer' );
                                            foreach( $cur_terms as $cur_term ){
                                              echo '<ul class="list">
                                                      <li>
                                                        <a href="'. get_term_link( (int)$cur_term->term_id, $cur_term->taxonomy ) .'">'. $cur_term->name .'</a>
                                                      </li>
                                                    </ul>';
                                            }
                                           ?>
                                           <?php the_content(); ?>
                                        </div>
                                      </div>
                                	<?php endwhile; ?>
                                	<?php else: ?>
                                		<div class="no-carousel">...</div>
                                	<?php endif; ?>
                                	<?php wp_reset_query(); ?>
                                </div>
                            </div>
                            <div class="grid_8 omega">
                                <div class="pad">
                                    <h2  class="h2">company history </h2>
                                    <h3> Sed ut perspiciatis unde omnis</h3>
                                    <p><strong class="txt1">2010</strong> - Erat  la cininec in vel ipsum auctorvorpt felieum iaculisy euisod consequat antpsum dolor sit conse ctetuer.<br>
                                    adipiscing elitellenteue sedlorquam coue ferm entum niuri.</p>
                                    <p><strong class="txt1">2009</strong> - Sed in lacus ut enim adipiscing aliqInpede mi aliquet sit amet euismod inor ut ligula. Aliquam  dapibus tincidunt metus. Praesent justo doim pulvinar . Vestibulum sed ante. </p>
                                    <p><strong class="txt1">2007</strong> - Donec sagittis euismod purus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiameaque ipsaquae.</p>
                                   <strong class="txt1">2006</strong> - Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni .
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
