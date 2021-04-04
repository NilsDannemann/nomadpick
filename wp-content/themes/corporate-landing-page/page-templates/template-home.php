<?php 
/**
 * Template Name: Homepage
 *
 * This is a home page template which uses slider with featured posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package corporate-landing-page
 */

get_header();

/**
 * filenames for different homepage sections assigned to array
 */
$defined_sections = array(
  'slider',
  'about',
  'cta',
  'blog',
  'contact',
  'subscribe',
);
?>
<div id="content" class="site-content">
<?php
/**
 * fetching different files using a loop in the aforementioned array
 */
foreach($defined_sections as $section){
  get_template_part( 'sections/home', $section );   
}
?>
</div>
<?php get_footer();?>