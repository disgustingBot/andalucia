<?php get_header(); ?>



<figure class="pageATF">
  <img class="pageATFImg rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" src="" alt="">
  <figcaption class="pageATFCaption rowcol1">
    <h3><?php the_title(); ?></h3>
    <!-- <h1 class="pageATFTitle">Jornadas Profesionales de Andalucía</h1> -->
  </figcaption>
</figure>
<main><?php the_content(); ?></main>
<?php // the_content( 'Continue reading ' . get_the_title() ); ?>

<?php get_footer(); ?>
