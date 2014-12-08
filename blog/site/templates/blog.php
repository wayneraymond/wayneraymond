<?php snippet('header') ?>
<!--<?php snippet('menu') ?>-->
<div class="border top"></div>
<div class="border right"></div>
<div class="border bottom"></div>
<div class="border left"></div>

<section class="content blog">
  
  <!--<h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>-->
  
<?php $articles = $page->children()->visible()->flip()->paginate(10) ?>

<?php foreach($articles as $article): ?>

  <article>
    <h1><?php echo html($article->title()) ?></h1>
    <p><?php echo excerpt($article->text(), 300) ?></p>
    <br/>
    <a href="<?php echo $article->url() ?>">Read more</a>
  </article>

  <?php endforeach ?>

 <article>
  <?php if($articles->pagination()->hasPages()): ?>
	<nav class="pagination">  

	  <?php if($articles->pagination()->hasNextPage()): ?>
	  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;</a>
	  <?php endif ?>

	  <?php if($articles->pagination()->hasPrevPage()): ?>
	  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo; newer posts</a>
	  <?php endif ?>

	</nav>
	<?php endif ?>
</article>

</section>

<!--<?php snippet('footer') ?>-->