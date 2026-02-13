<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="kg-card-markdown">
<?php $this->content(); ?>
</div>

<div class="col-lg-12 text-right back-to-home">
    <?php $this->title() ?>
</div>

<?php $this->need('footer.php'); ?>
