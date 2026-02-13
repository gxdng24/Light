<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('css/bootstrap/css/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/base.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/uncover.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css'); ?>">

    <?php $this->header('wlw=&xmlrpc=&rss2=&atom=&rss1=&template=&pingback=&generator'); ?>
</head>
<body<?php if($this->is('post')): ?> class="post-template"<?php endif; ?>>

<header>
<div class="branding">
  <h1><a class="blog-title" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a><span class="dot">.</span></h1>
</div>
</header>


<div class="<?php if($this->is('post')): ?>post <?php endif; ?>container-fluid">
  <div class="row">

    
    
