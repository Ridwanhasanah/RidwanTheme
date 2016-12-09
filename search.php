<?php get_header(); ?>

<main>
	<?php
	if (have_posts() ) { ?>
	<p class="sub_judul">
		Halaman Pencari
	</p>
	<?php
		while ( have_posts() ){ the_post();
			if($post->post_type == 'page') continue;
			 get_template_part('content'); //utk megambil kode yang ada di content.php

		}
	}else {
		echo 'tidak ada post';
	}
	?>
</main>
<?php get_footer(); ?>