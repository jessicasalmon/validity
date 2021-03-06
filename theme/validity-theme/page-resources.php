<?php
/*
  Template Name: Resources
*/
/**
 * The template for displaying the Resouce Page
 * It pulls its functionality from search.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package validity
 */

get_header(); ?>

<body class="page-resources">
  <div class="wrapper">
  <?php get_sidebar(); ?> <!-- sidebar = nav -->


<section class="section-1">
  <div class="outer full-height with-footer">
    <div class="inner transition">

      <div class="resources-intro">
        <h1 class="page-heading">Resources</h1>
        <p>We want to share our resources with anyone that is going to help with the fight to end descrimination against mental health.</p>
        <h2>Resources</h2>

        <?php get_search_form(); ?>
      </div>

    </div>
  </div>
</section>

<?php
get_footer(); ?>
</div>
