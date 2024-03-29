<?php
get_header();
    while(have_posts()) {
        the_post(); 
        pageBanner(array(

    ));
        ?>

    <div class="container container--narrow page-section">
      <div class="generic-content"> 
      <div class="row group">
        <div class="one-third">
<?php the_post_thumbnail('professor-portrait'); ?>
        </div>
        <div class="two-thirds">
<?php  the_content() ?>
        </div>
      </div>  
      </div>     
      <?php 
      $relatedPrograms = get_field('related_programs');
      if ($relatedPrograms){
        echo '<hr class="section-break">';
        echo '<h2 class="headline headling--medium">Subject(s) Taught</h2>';
        echo '<ul class="link-list min-list">';
        // print_r($relatedPrograms)
        foreach($relatedPrograms as $program) { ?>
      
        <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
      <?php } 
      echo '</ul>';
      } ?>
    </div>
        <?php
    }
    get_footer();
    ?>