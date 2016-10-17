<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<!--   <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" alt="read <?php the_title(); ?>"> -->
    <article class="article" id="post-<?php the_ID(); ?>">

      <?php $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'step-image' ); ?>
      <div class="image" style="background: url('<?php echo $post_image[0]; ?>') no-repeat center center; background-size: cover;">
      </div>

      <!-- post title -->
      <div class="title">
        <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" alt="read <?php the_title(); ?>"><?php the_title(); ?> - <?php the_time('m/d/Y') ?></a>
      </div>

      <div class="excerpt">
        <?php the_excerpt() ?>
      </div>

    </article>
<!--   </a> -->
<?php endwhile; ?>

<div class="pagination-wrap">
  <?php numeric_posts_nav(); ?>
</div>

<?php else: ?>

  <article>
    <h2><?php _e( 'Sorry, nothing to display.', 'juno' ); ?></h2>
  </article>

<?php endif; ?>
