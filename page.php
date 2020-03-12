<?php get_header(); ?>
<?php if(have_posts()){while(have_posts()){the_post(); ?>


  <?php $date = get_post_meta( get_the_ID(), 'date' )[0]; ?>
  <?php if($date){
    setlocale(LC_TIME,"es_ES.UTF-8");
    $t = strtotime($date);
    $textDate = strftime("%d de %B a las %H:%Mh", $t);
    $longDate = strftime("%A, %d de %B de %Y", $t);
    $shrtDate = date('H:i', $t);
  } ?>

<figure class="pageATF">
  <img class="pageATFImg rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" src="" alt="">
  <figcaption class="pageATFCaption rowcol1">
    <h1 class="pageATFTitle">Jornadas Profesionales de Andalucía</h1>
    <h2 class="pageATFSubTitle"><?php the_title(); echo ' - '.$longDate; ?></h2>
  </figcaption>
</figure>


<menu class="navBarContainer">
  <a class="navLink navHome" href="<?php echo site_url('');  ?>">Andalucía</a>

  <!-- <div class="burger" onclick="altClassFromSelector('alt','#navBar')"> -->
  <div class="burger">
    <div class="burgerBar"></div><div class="burgerBar"></div><div class="burgerBar"></div>
  </div>
  <ul class="navBar" id="navBar">

    <li class="navLi"><a href="#registro" class="navLink">REGISTRO</a></li>
    <li class="navLi"><a href="#evento" class="navLink">EVENTO</a></li>
    <li class="navLi"><a href="#cuando" class="navLink">CUÁNDO</a></li>
    <li class="navLi"><a href="#donde" class="navLink">DÓNDE</a></li>
    <!-- <li class="navLi"><a href="#alojamiento" class="navLink">ALOJAMIENTO</a></li> -->
    <li class="navLi"><a href="#contacto" class="navLink">CONTACTO</a></li>
    <li class="navLi"><a href="#participantes" class="navLink">PARTICIPANTES</a></li>

  </ul>
</menu>

<section class="section" id="registro">
  <h4 class="sectionTitle">Registro</h4>
  <p class="sectionText">La entrada al evento es <b>gratuita</b> siempre y cuando se realice <b>inscripción previa</b>. Para inscribirte, puedes utilizar este <b>formulario</b> o bien contactar con nosotros. En caso de querer asistir más de 4 agentes por oficina, por favor, haced llegar vuestra petición por correo electrónico a <a href="mailto:jornadas@andalucia.org">jornadas@andalucia.org</a></p>
  <form class="form" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <input type="hidden" name="action" value="lt_form_handler">
    <input type="hidden" name="link" value="<?php echo home_url( $wp->request ); ?>">
    <label for="" class="formLabel formFull">
      <p>Nombre de tu agencia</p>
      <input type="text" class="formInput" name="a01" placeholder="Ej: Viajes">
    </label>
    <label for="" class="formLabel">
      <p>Razón social</p>
      <input type="text" class="formInput" name="a02" placeholder="Ej: S.L.">
    </label>
    <label for="" class="formLabel">
      <p>Número de asistentes</p>
      <input type="number" class="formInput" name="a03" placeholder="" value="1" min="1" max="4">
    </label>
    <label for="" class="formLabel">
      <p>CIF</p>
      <input type="text" class="formInput" name="a04" placeholder="B12345678">
    </label>
    <label for="" class="formLabel">
      <p>Teléfono</p>
      <input type="number" class="formInput" name="a05" placeholder="612345678">
    </label>
    <label for="" class="formLabel formFull">
      <p>Email</p>
      <input type="text" class="formInput" name="a06" placeholder="viajes@ejemplo.es">
    </label>
    <label for="" class="formLabel formFull">
      <p>Nombre agente asistente 1</p>
      <input type="text" class="formInput" name="a07" placeholder="Nombre y apellidos">
    </label>


    <label for="formTC" class="formLabel formFull formCheckbox">
      <input type="checkbox" class="formInput" name="a08" id="formTC" required>
      <p>He leído la política de privacidad y acepto que mis datos personales sean tratados conforme a ella.</p>
    </label>

    <button class="sendBtn formFull" type="submit" name="submit">Enviar</button>
  </form>
</section>


<section class="section" id="evento">
  <h4 class="sectionTitle">Evento</h4>
  <p class="sectionText">Con el objetivo de presentaros las novedades surgidas en el último año en la ya amplia oferta turística de Andalucía, Turismo Andaluz organiza este networking con el que se quiere fomentar nuevas oportunidades de negocio promoviendo los productos y destinos de Andalucía entre el turista local.</p>
</section>

<section class="section cuando" id="cuando">
  <h4 class="sectionTitle">Cuándo</h4>
  <?php if($date){ ?>
    <p id="date" style="display:none"><?php echo $date; ?></p>
    <p class="sectionText sectionTexto">
      Toma nota. El evento tendrá lugar el día <?php echo $textDate; ?> ¡Qué no se te pase!
    </p>
    <div class="cronogramaData">
      <div class="logoTxt">
        <svg class="logoTxtSvg" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path fill="currentColor" d="M400 64h-48V12c0-6.6-5.4-12-12-12h-8c-6.6 0-12 5.4-12 12v52H128V12c0-6.6-5.4-12-12-12h-8c-6.6 0-12 5.4-12 12v52H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h352c8.8 0 16 7.2 16 16v48H32v-48c0-8.8 7.2-16 16-16zm352 384H48c-8.8 0-16-7.2-16-16V192h384v272c0 8.8-7.2 16-16 16zM148 320h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm96 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm96 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-96 96h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm-96 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm192 0h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12z"></path>
        </svg>
        <p class="logoTxtTxt"><?php echo $longDate; ?></p>
      </div>
      <div class="logoTxt">
        <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
        </svg>
        <p class="logoTxtTxt"><?php echo $shrtDate; ?></p>
      </div>
    </div>
    <div class="countdown">
      <p class="countdownBox"><span class="countdownNumber" id="days"></span><span class="countdownData">Días</span></p>
      <p class="countdownBox"><span class="countdownNumber" id="hour"></span><span class="countdownData">Horas</span></p>
      <p class="countdownBox"><span class="countdownNumber" id="mnts"></span><span class="countdownData">Minutos</span></p>
      <p class="countdownBox"><span class="countdownNumber" id="scds"></span><span class="countdownData">Segundos</span></p>
    </div>


    <!-- <div class="col2"> -->
    <div>
      <?php if (false): ?>

        <?php $traslado = get_post_meta( get_the_ID(), 'traslado' )[0]; ?>
        <?php if($traslado){?><p class="sectionText"><?php echo $traslado; ?></p><?php } ?>
        <?php $cronograma1 = get_post_meta( get_the_ID(), 'cronograma1' )[0]; ?>
        <?php if($cronograma1){?><p class="sectionText"><?php echo $cronograma1; ?></p><?php } ?>
        <?php $cronograma2 = get_post_meta( get_the_ID(), 'cronograma2' )[0]; ?>
        <?php if($cronograma2){?><p class="sectionText"><?php echo $cronograma2; ?></p><?php } ?>
        <?php $cronograma3 = get_post_meta( get_the_ID(), 'cronograma3' )[0]; ?>
        <?php if($cronograma3){?><p class="sectionText"><?php echo $cronograma3; ?></p><?php } ?>
        <?php $cronograma4 = get_post_meta( get_the_ID(), 'cronograma4' )[0]; ?>
        <?php if($cronograma4){?><p class="sectionText"><?php echo $cronograma4; ?></p><?php } ?>
        <?php $cronograma5 = get_post_meta( get_the_ID(), 'cronograma5' )[0]; ?>
        <?php if($cronograma5){?><p class="sectionText"><?php echo $cronograma5; ?></p><?php } ?>
      <?php endif; ?>

    </div>

    <!-- div.countdown>p.countdownBox*4>span.countdownNumber+span.countdownDay -->


  <?php } ?>
</section>

<section class="section donde" id="donde">
  <h4 class="sectionTitle">Dónde</h4>
  <div class="">
    <?php $donde = get_post_meta( get_the_ID(), 'donde' )[0]; ?>
    <?php if($donde){?>
      <p class="sectionText">Tanto el workshop como la cena tendrán lugar en <span><?php echo $donde; ?></span></p>
      <!-- <p class="lugarInfo"><?php echo $donde; ?></p> -->
      <div class="logoTxt">
        <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <path fill="currentColor" d="M541 229.16l-232.85-190a32.16 32.16 0 0 0-40.38 0L35 229.16a8 8 0 0 0-1.16 11.24l10.1 12.41a8 8 0 0 0 11.2 1.19L96 220.62v243a16 16 0 0 0 16 16h128a16 16 0 0 0 16-16v-128l64 .3V464a16 16 0 0 0 16 16l128-.33a16 16 0 0 0 16-16V220.62L520.86 254a8 8 0 0 0 11.25-1.16l10.1-12.41a8 8 0 0 0-1.21-11.27zm-93.11 218.59h.1l-96 .3V319.88a16.05 16.05 0 0 0-15.95-16l-96-.27a16 16 0 0 0-16.05 16v128.14H128V194.51L288 63.94l160 130.57z"></path>
        </svg>
        <p class="logoTxtTxt"><?php echo $donde; ?></p>
      </div>
    <?php } ?>
    <?php $direccion = get_post_meta( get_the_ID(), 'direccion' )[0]; ?>
    <?php if($direccion){?>
    <div class="logoTxt">
      <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
        <path fill="currentColor" d="M144 0C64.47 0 0 64.47 0 144c0 74.05 56.1 134.33 128 142.39v206.43l11.01 16.51c2.38 3.56 7.61 3.56 9.98 0L160 492.82V286.39c71.9-8.05 128-68.34 128-142.39C288 64.47 223.53 0 144 0zm0 256c-61.76 0-112-50.24-112-112S82.24 32 144 32s112 50.24 112 112-50.24 112-112 112zm0-192c-44.12 0-80 35.89-80 80 0 8.84 7.16 16 16 16s16-7.16 16-16c0-26.47 21.53-48 48-48 8.84 0 16-7.16 16-16s-7.16-16-16-16z"></path>
      </svg>
      <p class="logoTxtTxt"><?php echo $direccion; ?></p>
    </div>
    <?php } ?>
    <?php $telefono = get_post_meta( get_the_ID(), 'telefono' )[0]; ?>
    <?php if($telefono){?>
    <div class="logoTxt">
      <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
        <path fill="currentColor" d="M196 448h-72c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v8c0 6.6-5.4 12-12 12zM320 48v416c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V48C0 21.5 21.5 0 48 0h224c26.5 0 48 21.5 48 48zm-32 0c0-8.8-7.2-16-16-16H48c-8.8 0-16 7.2-16 16v416c0 8.8 7.2 16 16 16h224c8.8 0 16-7.2 16-16V48z"></path>
      </svg>
      <p class="logoTxtTxt"><?php echo $telefono; ?></p>
    </div>
    <?php } ?>
    <?php $website = get_post_meta( get_the_ID(), 'website' )[0]; ?>
    <?php if($website){?>
    <div class="logoTxt">
      <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM32 80c0-8.8 7.2-16 16-16h48v64H32V80zm448 352c0 8.8-7.2 16-16 16H48c-8.8 0-16-7.2-16-16V160h448v272zm0-304H128V64h336c8.8 0 16 7.2 16 16v48z"></path>
      </svg>
      <p class="logoTxtTxt"><a href="<?php echo $website; ?>">visit website</a></p>
    </div>
    <?php } ?>
  </div>
  <div class="">
    <!-- <div style="width: 700px;position: relative;"> -->
    <?php $map = get_post_meta( get_the_ID(), 'map' )[0]; ?>
    <?php if($map){?>
      <!-- <p class="lugarInfo"><?php echo $map; ?></p> -->
      <iframe class="dondeMap" src="<?php echo $map; ?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <?php } ?>
</section>

<?php if (false): ?>
  <section class="section alojamiento" id="alojamiento">
    <h4 class="sectionTitle">Alojamiento</h4>
    <main><?php the_content(); ?></main>
  </section>
<?php endif; ?>

<section class="section contacto" id="contacto">
  <h4 class="sectionTitle">Contacto</h4>
  <p class="sectionText">Si quieres ponerte en contacto con nosotros para cualquier tema relacionado con este evento, puedes hacerlo a través de cualquiera de estos medios:</p>
  <div class="contactoFeatures">
    <div class="logoTxt">
      <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path>
      </svg>
      <p class="logoTxtTxt">jornadasandalucia@andalucia.org</p>
    </div>
    <div class="logoTxt">
      <svg class="logoTxtSvg" aria-hidden="true" focusable="false" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
        <path fill="currentColor" d="M487.8 24.1L387 .8c-14.7-3.4-29.8 4.2-35.8 18.1l-46.5 108.5c-5.5 12.7-1.8 27.7 8.9 36.5l53.9 44.1c-34 69.2-90.3 125.6-159.6 159.6l-44.1-53.9c-8.8-10.7-23.8-14.4-36.5-8.9L18.9 351.3C5 357.3-2.6 372.3.8 387L24 487.7C27.3 502 39.9 512 54.5 512 306.7 512 512 307.8 512 54.5c0-14.6-10-27.2-24.2-30.4zM55.1 480l-23-99.6 107.4-46 59.5 72.8c103.6-48.6 159.7-104.9 208.1-208.1l-72.8-59.5 46-107.4 99.6 23C479.7 289.7 289.6 479.7 55.1 480z" class=""></path>
      </svg>
      <p class="logoTxtTxt">646 92 85 17</p>
    </div>
  </div>
</section>

<section class="section" id="participantes">
  <h4 class="sectionTitle">Participantes</h4>
  <p class="sectionText">Empresas andaluzas que estarán presentes en el evento y con las que tendrás oportunidad de hablar y establecer nuevas oportunidades de negocio. Puedes filtrarlas para mostrar aquellas de una provincia en concreto.</p>

  <div class="partners andalucia" id="partners">
    <ul class="partnersFilter">
      <?php $tags = get_tags(array( 'hide_empty' => false )); ?>
      <style media="screen">
        <?php
          $style = '';
          foreach ($tags as $tag) { $style = $style . '.'.$tag->name.' .partnerCard.'.$tag->name.','; }
          $style = substr($style, 0, -1);
          $style = $style . '{display:grid}';

          foreach ($tags as $tag) { $style = $style . '.'.$tag->name.' .partnersFilterLink.'.$tag->name.','; }
          $style = substr($style, 0, -1);
          $style = $style . '{color:green}';

          echo $style;
        ?>

      </style>
      <?php foreach ($tags as $tag) { ?>
        <li class="partnersFilterLink <?php echo $tag->name; ?>" onclick="altClassFromSelector('<?php echo $tag->name; ?>','#partners','partners')"><?php echo $tag->name; ?></li>
      <?php } ?>
    </ul>
    <div class="partnersGrid">
      <?php
      $args=array(
        'post_type'=>'post',
        'posts_per_page'=>51,
        // 'tag' => 'carousel',
      );$atf=new WP_Query($args);
      while($atf->have_posts()){$atf->the_post(); ?>
        <figure class="partnerCard <?php
          $posttags = get_the_tags();
          if ($posttags) { foreach($posttags as $tag) { echo $tag->name; } }
          ?>">
          <a class="partnerCardImg rowcol1" href="<?php echo get_permalink(); ?>">
            <img class="partnerCardImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
          </a>
          <figcaption class="partnerCardCaption rowcol1">
            <h4><?php the_title(); ?></h4>
          </figcaption>
        </figure>
      <?php } wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php }} ?>
<?php get_footer(); ?>
