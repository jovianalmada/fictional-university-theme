<?php get_header();
pageBanner(array(
  'title' => 'Our Campuses',
  'subtitle' => 'We have several conveniently located campuses'
));
?>

<!-- <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title">All Programs</h1>
      <div class="page-banner__intro">
        <p>There is something for everyone, have a look around!</p>
      </div>
    </div>  
  </div> -->
  <div class="container container--narrow page-section">
    <ul class="link-list min-list">
  <?php
  $map_counter = 0;
  while(have_posts()) {
    $map_counter += 1;
    the_post(); ?>
    <li><a href="<?php the_permalink();  ?>"><?php the_title(); ?></a><?php echo do_shortcode('[ultimate_maps id="' . $map_counter . '"]')?></li>
  <?php } 
  echo paginate_links();
  ?>
  </ul>
</div>
<?php
 get_footer();
 ?>