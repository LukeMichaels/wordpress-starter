<?php get_header(); ?>

  <main role="main" class="news">

    <?php $hero_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'hero' ); ?>
    <section class="hero" style="background: url('<?php echo $hero_image[0]; ?>') no-repeat center center; background-size: cover;">
      <div class="row">
        <div class="content-wrap">
          <div class="headline">
            <h1>KOG Newsroom</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="page-content">
      <div class="row">

        <?php get_sidebar(); ?>

        <div class="article-list-wrap">
          <div class="article-list" id="article-list">
            <h2><?php echo $cat_name = single_cat_title( '', false ); ?></h2>
            <?php echo category_description( $category_id ); ?>
            <?php get_template_part('loop'); ?>

          </div><!-- .article-list -->
        </div><!-- .article-list-wrap -->

      </div>
    </section>

  </main>

<?php get_footer(); ?>
