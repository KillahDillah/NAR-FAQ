
<?php
/*Template Name: FAQ*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
   <h3 class="abouttitle" style="padding-bottom: 15px;"><?php the_title(); ?></h3>

   <div class="post_divider"></div>

  <div class="aboutcontent">
    <?php the_content(__('(more...)')); ?>
  </div>

</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
