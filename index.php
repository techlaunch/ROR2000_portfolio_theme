<?php get_header() ?>

<div class="col-sm-3">
	<?php get_sidebar() ?>
</div>

<div class="col-sm-9">
	<h1><?php bloginfo('name') ?></h1>
	<p><?php bloginfo('description') ?></p>

	<?php while(have_posts()) { the_post() ?>
		<h1><?php the_title() ?></h1>
		<div><?php the_content() ?></div>
	<?php } ?>

	<hr/>
	<p>Please contact me at <?php bloginfo('admin_email') ?></p>
</div>

<?php get_footer() ?>
