<?php theme_include('header'); ?>

<div class="row">
	<div class="large-12 columns" role="content">

	<?php if(has_posts()): ?>
			<?php posts(); ?>
      <article>
		    <h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
		    <h6>Posted <?php echo relative_time(article_time()); ?></h6>
		    <?php if (article_description()): ?>
          <p class="description"><?php echo article_description(); ?></p>
        <?php endif; ?>
    	</article>

			<?php $i = 0; while(posts()): $i++; ?>
      <article>
		    <h3><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h3>
		    <h6>Posted <?php echo relative_time(article_time()); ?></h6>
    	</article>
    	<hr />
			<?php endwhile; ?>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<div class="wrap">
				<?php echo posts_prev('Older Posts'); ?>
				<?php echo posts_next('Newer Posts'); ?>
			</div>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

	</div>
</div>

<?php theme_include('footer'); ?>