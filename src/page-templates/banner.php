<?php
/*
Template name: Bannière
 */
get_header(); ?>
  <main>
    <?php
    $post = get_post();

    if (!has_blocks($post->post_content)): ?>

      <section class="container">
        <h1><?php the_title(); ?></h1>
      </section>

      <?php the_content(); ?>
    <?php else:
      $blocks = parse_blocks($post->post_content);
      $cover  = false;

      // Extract the cover from the blocks
      foreach ($blocks as $i => $block) {
        $isCover = !$cover && $block['blockName'] === 'core/cover';

        if ($i === 0 && !$isCover) {
          // First block is not a cover, we need to open a tag.
          echo '<div class="container">';
        }

        if (!$cover && $block['blockName'] === 'core/cover') {
          // We found the cover
          if ($i !== 0) {
            // Cover is not the first block, we need to close the previous .container
            echo '</div>';
          }

          echo '<div class="main__cover">' . apply_filters('the_content', render_block($block)) . '</div>';
          echo '<div class="container">';
          $cover = true;
          continue;
        }

        echo apply_filters('the_content', render_block($block));
      }

      if (count($blocks) > 0) {
        echo "</div>";
      }
    endif; ?>
  </main>

<?php get_footer();
