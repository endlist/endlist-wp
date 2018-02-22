<!doctype Html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_directory'); ?>/assets/img/favicon32.png">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300%7CGlass+Antiqua" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/font/monosocialiconsfont.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/main.css">
  <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/logo.css">
  <title><?php echo get_bloginfo( 'name' ); ?> <?php echo single_post_title(); ?></title>
  <?php wp_head();?>
</head>

<body class="container-fluid font-alegreya-sans">

  <header class="row d-flex flex-row-reverse align-items-center">
    <div class="logo col-3 col-sm-4 d-flex justify-content-end align-items-baseline">
      <svg viewBox="0 0 170 100" class="col-sm-4">
        <use xlink:href="#svg-logo" />
      </svg>
      <svg viewBox="0 0 240 100" class="col-sm-5 hidden-xs-down">
        <use xlink:href="#svg-text" />
      </svg>
    </div>
    <div class="interaction-icons col-9 col-sm-8">
      <a class="symbol" data-content="&#xe286;" href="http://twitter.com/wrenishly"><span class="sr-only">Twitter</span></a>
      <a class="symbol" data-content="&#xe237;" href="http://github.com/endlist"><span class="sr-only">Github</span></a>
      <a class="symbol" data-content="&#xe252;" href="https://www.linkedin.com/in/endlist"><span class="sr-only">LinkedIn</span></a>
      <a class="symbol" data-content="&#xe224;" href="mailto:self&#64;endlist&#46;io"><span class="sr-only">Email</span></a>
    </div>
    <?php if( is_home() ) {?>
      <picture>
        <source
          media="(min-width: 1290px)"
          srcset="<?php echo get_bloginfo('template_directory'); ?>/assets/img/portrait1290.png"
          />
        <source
          media="(min-width: 720px)"
          srcset="<?php echo get_bloginfo('template_directory'); ?>/assets/img/portrait720.png"
          />
        <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/portrait.png" class="img-fluid" alt="self portrait">
      </picture>
      <?php } ?>
  </header>

  <?php get_sidebar(); ?>