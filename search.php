<?php theme_include('header'); ?>
<section class="content search-page wrap">
	<h1 class="post-title">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

	<?php if(has_search_results()): ?>
		<ul class="items">
			<?php $i = 0; while(search_results()): $i++; ?>
			<li>
				<article>
					<h2 class="post-title">
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<nav class="pagination">
			<?php echo search_prev('&gt;'); ?>
			<?php echo search_next('&lt;'); ?>
		</nav>
		<?php endif; ?>

	<?php else: ?>
		<p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
	<?php endif; ?></section>
<?php theme_include('footer'); ?>