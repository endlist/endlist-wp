  <nav class="row nav sticky-top">
    <a href="<?php echo get_bloginfo( 'wpurl' ); ?>" class="nav-link">home</a>
    <a href="/portfolio" class="nav-link">work</a>
    <a href="/category/posts" class="nav-link">posts</a>
  </nav>

  <?php if( is_home() ) {?>
  <section class="intro text-center rounded-bottom">
    <h2 class="font-glass-antiqua text-lowercase">Web Application Engineer</h2>
    <p class="text-lowercase">JavaScript Specialist.  CSS Enthusiast.  TDD Adherent.  Design & Illustration Initiate.</p>
  </section>
  <?php } ?>
