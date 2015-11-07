<?php 

/*
  Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">


    <!-- ======================= PORTFOLIO ========================== -->
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php
        // Start our Custom Query
        $projectsQuery = new WP_Query(
          array(
            'posts_per_page' => -1, //fat arrow for arrays
            'post_type' => 'project',
            'order' => 'ASC'
            )
        ); ?>

        <?php //this returns a boolean, ie: while this is still true, single arrow = method ?>
        <?php if ( $projectsQuery->have_posts() ) : ?>
          <!-- while we have posts, go do stuff to them  vvvvvvvv sets up any fields that are avail.-->
          <?php while ($projectsQuery->have_posts()) : $projectsQuery->the_post(); ?>

            <!-- get the title of your projects, grab the title of your projects = post_name -->
            <section id="<?php echo $post->post_name; ?>">
              <?php $image = get_field('image'); ?>
              <!--<pre><?php //print_r($image);?></pre> -->
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']?>">

              <!-- Title Project -->
              <h2><?php the_title(); ?></h2>
              
              <!-- Project Description -->
              <?php the_content(); ?>

              <p><?php the_sub_field(''); ?></p>
              <div class="projects">
              <!-- when you have stuff in the sub fields (ie: 1-lvl deep inside the repeater), do stuff -->
                <p>Built with:</p>
                <?php while( has_sub_field('technologies') ): ?>
                  <!-- when you have stuff (parent) inside, go do stuff -->
                  <div class="project">
                  <!-- I'm the stuff / sub fields inside the parent! -->

                    <p><?php the_sub_field('technology'); ?></p>
                    <?php $image = get_sub_field('image'); ?>
                    <img src="<?php echo $image['sizes']['square'] ?>">
                  </div>

                <?php endwhile; ?> <!-- /technologies loop-->
              </div> <!-- /.projects -->
            </section>
          <?php endwhile; ?> <!-- /$projectsQuery loop-->

          <?php wp_reset_postdata(); ?>

          <?php else:  ?>
            <!-- [stuff that happens if there aren't any posts] -->
          <?php endif; ?>

      <?php endwhile; // end '.content' loop?>

       <?php the_content(); ?>



      <!-- ========================== SKILLS SECTION ==========================-->
      <section id="skills" class="skills">
        <h2>Skills</h2>
        <?php if( have_rows('skills') ): ?>

          <ul class="skillList">
            <?php while( have_rows('skills') ): the_row(); 
              $skill = get_sub_field('the_skill');
              ?>

              <li class="skillItem">
                <p><?php echo $skill; ?></p>
                <i class="fa fa-<?php the_sub_field('fa_classes'); ?>"></i>
                <i class="devicons devicons-<?php the_sub_field('devicon_classes'); ?>"></i>
              </li>

            <?php endwhile; ?> <!-- end '.skillList' loop-->
          </ul>

        <?php endif; ?>
      </section><!-- /section.skills-->


      <section id="contact" class="contact">
       <?php echo do_shortcode( '[contact-form-7 id="31" title="Contact form 1"]' ); ?>
      </section>

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>