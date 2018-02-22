  <section id="work" class="work">
	<a href="/portfolio"><h3 class="font-glass-antiqua text-lowercase">Work »</h3></a>
    <div class="row">
    <?php
    $args = [
        'post_type' => 'jetpack-portfolio',
        'posts_per_page' => 3,
		'tax_query' => array(
			array(
				'taxonomy' => 'jetpack-portfolio-type',
				'field' => 'slug',
				'terms' => 'featured',
			) 
		)
    ];
    $loop = new WP_Query( $args );
    while ($loop->have_posts()) {
        $loop->the_post();
        $large_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large-thumb')[0];
        $medium_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium-thumb')[0];
        $small_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail')[0];
        ?>
            <picture class="project col-sm-4">
                <a href="<?php the_permalink(); ?>">
                    <source
                    media="(min-width: 3000px)"
                    srcset="<?php echo $large_thumb ?>"
                    />
                    <source
                    media="(min-width: 1500px)"
                    srcset="<?php echo $medium_thumb ?>"
                    />
                    <img
                    src="<?php echo $small_thumb ?>"
                    class="img-fluid"
                    alt="<?php the_title(); ?>"
                    title="<?php the_title(); ?>"
                    >
                </a>
            </picture>
        <?php
    } ?>
    </div>
  </section>
