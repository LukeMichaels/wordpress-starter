<?php get_header(); ?>

  <main role="main" class="default">

    <?php $hero_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero' ); ?>
    <section class="hero" style="background: url('<?php echo $hero_image[0]; ?>') no-repeat center center; background-size: cover;">
      <div class="row">
        <div class="content-wrap">
          <div class="headline">
            <h1><?php echo $post->post_title; ?></h1>
          </div>
        </div>
      </div>
    </section>

    <section class="page-content">
      <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post();
          the_content(); 
        endwhile; endif; ?>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
