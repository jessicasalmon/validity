<?php
/*
  Template Name: Generic template
*/
/**
 * The template for displaying a Generic Page Without An Image
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>


<body class="page-generic-template">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->

  <section class="section-1">
    <div class="outer full-height centered">
      <div class="inner transition">

        <div class="generic-template-content">
          <div class="generic-template-content-container">
            <h1 class="group-heading">
              <p><?php the_title(); ?></p>
            </h1>

            <?php
              // TO SHOW THE PAGE CONTENTS
              while ( have_posts() ) : the_post(); ?>
              <p><?php the_content(); ?></p>
            <?php
              endwhile; //resetting the page loop
              // wp_reset_query(); //resetting the page query
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer(); ?>
</div>
