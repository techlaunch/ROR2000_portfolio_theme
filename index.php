<?php get_header() ?>

<div class="col-sm-3">
	<?php get_sidebar() ?>
</div>

<div class="col-sm-9">
	<h1><?php bloginfo('name') ?></h1>
	<p><?php bloginfo('description') ?></p>

	<h1>Projects</h1>
	<?php while(have_posts()) { the_post() ?>
		<?php if(get_the_category()[0]->name == 'project') { ?>
			<a href="<?= get_post_custom()['link'][0] ?>"><?php the_post_thumbnail() ?></a>
		<?php } ?>
	<?php } ?>

	<?php while(have_posts()) { the_post() ?>
		<?php if(get_the_category()[0]->name != 'project') { ?>
			<h1><?php the_title() ?></h1>
			<div><?php the_content() ?></div>
		<?php } ?>
	<?php } ?>

	<hr/>
	<p>Please contact me at <?php bloginfo('admin_email') ?></p>
</div>

<?php get_footer() ?>
