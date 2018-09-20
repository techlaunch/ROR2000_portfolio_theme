<img class="img" src="<?= get_template_directory_uri() ?>/imgs/salvi.jpg" />
<ul>
	<?php while(have_posts()) { the_post() ?>
		<li><a href="#<?php the_ID() ?>"><?php the_title() ?></a></li>
	<?php } ?>
</ul>