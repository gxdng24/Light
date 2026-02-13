<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>


    <footer>
    <div class="copyright">
    Honour by Typecho
    </div>
    <div class="social-media">
      <!-- Loop through the navigation items -->
      <a href="<?php $this->options->siteUrl(); ?>"><?php _e('Home'); ?></a>
      <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
      <?php while($pages->next()): ?>
      <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
      <?php endwhile; ?>
      <!-- End the loop -->
    </div>
    </footer>
    <script src="<?php $this->options->themeUrl(); ?>js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/anime.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/uncover.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/demo3.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>/js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl(); ?>/js/custom.js"></script>
    <script src="<?php $this->options->themeUrl(); ?>js/masonry.pkgd.min.js"></script>
    <script src="<?php $this->options->themeUrl(); ?>js/imagesloaded.pkgd.min.js"></script>

<?php $this->footer(); ?>
</body>
</html>
