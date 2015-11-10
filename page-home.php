<?php 

/*
  Template Name: Home Page
*/

get_header();  ?>
<!-- ================================ END HEADER ==================================-->


<!-- ============================= BEGIN MAIN ==================================-->
<div class="main">
  <div class="container">
    <div class="content">

    <!-- =========================== BEGIN PROJECTS ================================ -->
      <section id="projects" class="projects">
        <h4>Projects</h4>
       <!-- <div class="container"> -->
        <?php // Start the loop?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           
          <?php
          // Start our custom query to grab project pieces
          
            $projectsQuery = new WP_Query(
              array(
                'posts_per_page' => -1, // fat arrow is used with php arrays
                'post_type' => 'project',
                'order' => 'ASC'
                )
            ); ?>

            <?php // This returns a Boolean, ie: while this is still true, single arrow = method ?>
            
            <?php if ( $projectsQuery->have_posts() ) : ?>
              
              <?php // While we have posts, go do stuff to them. vvv sets up any fields that are available. ?>

              <?php while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); ?>

                <!-- =========================== PROJECTS PIECES ================================ -->
             
                <?php // Grab the title of your projects = post_name and use it as id for your div ?>
                    <div id="<?php echo $post->post_name; ?>" class="projPiece">

                      <?php //store in variable ?>
                      <?php $image = get_field('image'); ?>
                      <!--<pre><?php //print_r($image);?></pre> -->
                      
                      <!-- PROJECT IMAGE SCREENSHOT -->
                      <div class="projImage" style="background-image: url(<?php echo $image['url']; ?>);">
                        <?php // Display the PROJECT IMAGE on the page ?>
                        <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>"> -->
                      </div><!-- /.projImage -->
                      
                      <!-- PROJECT DESCRIPTION DETAILS -->
                      <div class="projDetails">
                        <?php // Display Project Title ?>
                        <h5><?php the_title(); ?></h5>
                        
                        <?php // Project Description ?>
                        <?php the_content(); ?>

                        <?php // when you have stuff in the sub fields (ie: 1-lvl deep inside the repeater), do stuff ?>
                          <p class="built">Built with:</p>
                          <ul class="techUsed">
                            <?php // when you have stuff inside the repeater parent, go do stuff ?>
                            <?php while( has_sub_field('technologies') ): ?>

                              <?php // I'm the stuff / sub fields inside the parent! ?>
                                <?php // Project Tech Skills Used ?>
                                  <li><?php the_sub_field('technology'); ?><span>/</span></li>
                                <?php //$image = get_sub_field('image'); ?>
                                <!-- <img src="<?php //echo $image['sizes']['square'] ?>"> -->

                          <?php endwhile; ?>
                          </ul>
                          <a href="<?php the_field('proj_link'); ?>" target="_blank" class="btn">Launch Project</a>
                      </div><!-- /.projDetails-->
                    </div><!-- /#id post name, /.projPiece -->
    
              <?php endwhile; ?> 
              <?php //end $projectsQuery loop ?>

              <?php wp_reset_postdata(); ?>

              <?php else:  ?>
              <!-- [stuff that happens if there aren't any posts] -->
              <?php endif; ?>

        <?php endwhile; // end '.content' loop?>
      <!--   </div>/container -->
      </section> <!-- /.projects-->
      <!-- =========================== END PROJECTS ================================ -->
      <!-- =========================== BEGIN ABOUT ================================ -->
       <?php //Display WYSIWYG content ?>
      <section id="about" class="about">
        <h4>About</h4>
        <div class="aboutWrap">
          <?php the_content(); ?>
        </div>
      </section>
      <!-- =========================== END ABOUT ================================ -->


      <!-- ========================== SKILLS SECTION ==========================-->
      <section id="skills" class="skills">
        <h4>Skills</h4>
        <!-- <div class="container"> -->
          <?php if( have_rows('skills') ): ?>

            <ul class="skillList">
              <?php while( have_rows('skills') ): the_row(); 
                $skill = get_sub_field('the_skill');
                ?>

                <li class="skillItem">
                  <i class="fa fa-<?php the_sub_field('fa_classes'); ?>"></i>
                  <i class="devicons devicons-<?php the_sub_field('devicon_classes'); ?>"></i>
                  <p><?php echo $skill; ?></p>
                </li>

              <?php endwhile; ?> <!-- end '.skillList' loop-->
            </ul>

          <?php endif; ?>
        <!-- </div> -->
      </section><!-- /section.skills-->
      
      <!-- ======================= END SKILLS SECTION ==========================-->

      <!-- ======================= BEGIN CONTACT SECTION ==========================-->

      <section id="contact" class="contact">
        <h4>Contact</h4>
        <div class="formWrap">
          <?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]' ); ?>
       </div>
      </section>

      <!-- ======================= END CONTACT SECTION ==========================-->

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<!-- ======================= BEGIN FOOTER SECTION ==========================-->
<?php get_footer(); ?>