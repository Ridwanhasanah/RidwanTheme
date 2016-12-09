<?php get_header(); ?>
<!-- single.php ini di gunakan unutk menampilkan pos agar muncul content lengkap -->
<main>
	<?php
	if (have_posts() ) {
		while ( have_posts() ){
			the_post(); 

			get_template_part('content'); //utk megambil kode yang ada di content.php

		}
	}else {
		echo 'tidak ada post';
	}
	?>
</main>
<aside>
	<?php dynamic_sidebar('sidebar2'); ?>
</aside>

<div class="clear"></div>
<?php get_footer(); ?>