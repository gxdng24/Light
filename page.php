<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-lg-6 col-lg-offset-3">
<div class="kg-card-markdown">
<h2><?php $this->title() ?></h2>
<?php $this->content(); ?>
<hr>
<?php $this->need('comments.php'); ?>
</div>
</div>


<?php $this->need('footer.php'); ?>
