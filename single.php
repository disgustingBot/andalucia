<?php get_header(); ?>
<?php while(have_posts()){the_post() ?>

<!-- <figure class="pageATF">
  <img class="pageATFImg rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" src="" alt="">
  <figcaption class="pageATFCaption rowcol1">
    <h1 class="pageATFTitle">Jornadas Profesionales de Andalucía</h1>
  </figcaption>
</figure> -->

<section class="section single">
  <h3 class="singleTitle"><?php the_title(); ?></h3>
  <img class="singleImg col2 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" src="" alt="">
  <main class="singleContent"><?php echo the_content(); ?></main>
</section>

<?php // the_content( 'Continue reading ' . get_the_title() ); ?>

<?php } ?>
<?php get_footer(); ?>


<!-- strlen() #226 -->
