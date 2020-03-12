<?php get_header(); ?>

<section class="section">


  <h1 class="siteTitle"><?php echo get_bloginfo( 'name' ); ?></h1>

  <h2 class="siteSubTitle"><?php echo get_bloginfo( 'description' ); ?></h2>



  <section class="show">
  <?php
    $args=array(
      'post_type'=>'page',
      'posts_per_page'=>4,
      // 'tag' => 'carousel',
    );$atf=new WP_Query($args);
    while($atf->have_posts()){$atf->the_post(); ?>
    <figure class="card">
      <a class="cardImg" href="<?php echo get_permalink(); ?>">
        <img class="cardImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
      </a>
      <figcaption class="cardCaption">
        <h4><?php the_title(); ?></h4>
        <!-- <p>lalalala</p> -->
      </figcaption>
    </figure>
    <?php } wp_reset_query(); ?>

  </section>

  <p>Las reservas en los Hoteles las realizará directamente cada participante en los teléfonos y
  direcciones de correo electrónico que se indican. El hotel no respetará las tarifas cuando
  la reserva sea a través de agencia de viajes.</p>

</section>

<?php get_footer(); ?>
