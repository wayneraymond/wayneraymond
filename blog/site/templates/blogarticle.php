<?php snippet('header') ?>
<!--<?php snippet('menu') ?>-->
<div class="border top"></div>
<div class="border right"></div>
<div class="border bottom"></div>
<div class="border left"></div>

<section class="content blogarticle">
  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d.m.Y') ?></time>
    <?php echo kirbytext($page->text()) ?>

  </article>

  <article>
  	<a href="<?php echo url('home') ?>">Back</a>
  </article>

 <!-- <article>
  	<a href="<?php echo url('home/feed') ?>">Subscribe to my RSS feed</a>
  </article>-->
</section>

<!-- <?php snippet('footer') ?> -->