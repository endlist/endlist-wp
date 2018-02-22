  <section id="posts" class="posts">
    <a href="/category/posts"><h3 class="font-glass-antiqua text-lowercase">Posts »</h3></a>
    <div class="entries row">
        <?php
        $args = array(
            'posts_per_page' => 4,
        );
        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <article class="entry col-md-3">
            <?php get_template_part( 'content', get_post_format() ); ?>
        </article>

        <?php endwhile; endif; ?>
    </div>
  </section>
