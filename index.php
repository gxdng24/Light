<?php
/**
 * 这是 Typecho 博客程序的一套相册皮肤
 * 
 * @package Typecho Light Theme 
 * @author Typecho Pro Team
 * @version 1.2
 * @link https://pro.typecho.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<main id="content" class="content grid" role="main">

<?php while($this->next()): ?>
    <article class="post col-xs-12 col-sm-6 col-md-4 col-lg-3 grid ">
    <div class="post-featured-image animated fadeInUp grid__item ">
      <div class="scroll-img" style="background-image: url(<?php if (array_key_exists('img',unserialize($this->___fields()))): ?><?php $this->fields->img(); ?><?php else: ?><?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
$img = $matches[2][0];
echo <<<Html
{$img}
Html;
}
?><?php endif; ?>);">
      </div>
      <a href="<?php $this->permalink() ?>">
      <div class="mask">
      </div>
      </a>
      <time class="entry-date" datetime="<?php $this->date(); ?>"><?php $this->date(); ?></time>
      <div class="post-tag">
        <?php $this->title() ?>
      </div>
    </div>
    </article>

<?php endwhile; ?>

</main>

    <div class="clearfix">
    </div>
    <nav class="pagination" role="navigation">
    <span class="page-number">第 <?php if($this->_currentPage>1) echo $this->_currentPage;  else echo 1;?> 页 / 共 <?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?> 页</span>
    <div class="pagination-posts">
      <?php $this->pageLink('下一页','next'); ?>
      <div>
    </nav>

<?php $this->need('footer.php'); ?>
