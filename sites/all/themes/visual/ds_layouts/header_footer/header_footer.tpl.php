<?php

/**
 * @file
 * Display Suite header + content + footer.
 */
?>

<<?php print $ds_content_wrapper; print $layout_attributes; ?> class="ds-1col <?php print $classes;?> clearfix">


<article class="<?php print $classes; ?>">
  <div class="node-inner">
    <header>
      <?php print $ds_header; ?>

    </header>
    <div class="content">

      <?php print $ds_content; ?>

    </div>
    <?php if (!empty($ds_footer)) : ?>
      <footer>
      
      <?php print $ds_footer; ?>

      </footer>
    <?php endif; ?>
  </div> <!-- /node-inner -->

</article> <!-- /node-->


<?php print $ds_extra; ?>

</<?php print $ds_content_wrapper ?>>



<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>