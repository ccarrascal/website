<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<!-- ______________________ HEADER _______________________ -->
  <header id="header">
    <div class="section-1 clearfix">
      <div class="container-12">
        <div class="grid-12">
          <div class="clearfix">

            <div class="col1">
              <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                  <?= $site_name ?> 
                </a>
              <?php endif; ?>

   
            </div>

            <div class="col2">
              <?php if ($page['header']): ?>
                <div id="header-region">
                  <?php print render($page['header']); ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
          <div class="section-3 clearfix">
            <?php if ($page['navbar']): ?>
              <div id="header-region-menu" class="region-menu"> 
                <?php print render($page['navbar']); ?>
              </div>
            <?php endif; ?>
          </div>

        </div>
      </div>    
    </div> <!-- /section-1 -->
    <div class="section-2-wrap">
      <div class="container-12">
        <div class="grid-12">

<?php
/*
       <?php if ($main_menu || $secondary_menu || $page['navbar']): ?>
          <nav id="navigation" class="menu <?php !empty($main_menu) ? print "with-primary" : ''; !empty($secondary_menu) ? print " with-secondary" : ''; ?>">
            <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
            <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
            <?php if ($page['navbar']): ?>
              <div id="navbar" class="clear">
                <?php print render($page['navbar']); ?>
              </div>
            <?php endif; ?>
          </nav>
        <?php endif; ?>
        */
?>

        </div>
      </div>    
    </div> <!-- /section-2 -->

    <div class="haeder-bottom-wrap">
      <div class="container-12">
        <div class="grid-12">
        </div>
      </div>
    </div>

  </header> <!-- /header -->
  
  <div id="main-wrapper" >
    <div class="container-12">
      <div class="grid-12">
        <div id="main" class="clearfix">

          <?php if ($page['highlight']): ?>
            <div id="highlight">
              <?php print render($page['highlight']) ?>
            </div>
          <?php endif; ?>

          <?php
            $content_classes = ($page['sidebar_first'] || $page['sidebar_second']) ? "grid-8" : "";
          ?>
          <div id="content" class="column <?= $content_classes ?>" role="main">

            <div id="content-inner" class="inner column center section">
              <?php if ($page['content_top']): ?>
                    <div id="content_top"><?php print render($page['content_top']) ?></div>
              <?php endif; ?>

              <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
                <div id="content-header">
                  <?php if (!$is_front) : ?>
                    <?php print $breadcrumb; ?>
                  <?php endif; ?>
                  <?php if ($title): ?>
                    <h1 class="title"><?php print $title; ?></h1>
                  <?php endif; ?>
                  <?php print $messages; ?>
                  <?php print render($page['help']); ?>
                  <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div>
                  <?php endif; ?>
                  <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul>
                  <?php endif; ?>
                </div> <!-- /#content-header -->
              <?php endif; ?>

              <div id="content-area">
                <?php print render($page['content']) ?>
              </div>
              
              <?php print $feed_icons; ?>

              <?php if ($page['content_bottom']): ?>
                    <div id="content_bottom"><?php print render($page['content_bottom']) ?></div>
              <?php endif; ?>

            </div>
          </div> <!-- /content-inner /content -->


          <?php if ($page['sidebar_first']): ?>
            <aside id="sidebar-first" class="column column_right grid-3 omega">
              <div id="sidebar-first-inner" class="inner">
                <?php print render($page['sidebar_first']); ?>
              </div>
            </aside>
          <?php endif; ?> <!-- /sidebar-first -->
          <?php if ($page['sidebar_second']): ?>
            <aside id="sidebar-second" class="column column_right grid-3 omega">
              <div id="sidebar-second-inner" class="inner">
                <?php print render($page['sidebar_second']); ?>
              </div>
            </aside>
          <?php endif; ?> <!-- /sidebar-second -->


        </div> <!-- /main  -->

      </div>
    </div> <!-- container 12 -->

  </div> <!-- /main-wrapper -->
</div> <!-- /page -->

<!-- ______________________ FOOTER _______________________ -->
<?php if ($page['footer']): ?>
  <footer id="footer">
    <div class="footer-wrapper">
      <div class="container-12">
        <div class="grid-12">
        <?php print render($page['footer']); ?>
        </div>
      </div>
    </div>
  </footer> <!-- /footer -->
<?php endif; ?>

