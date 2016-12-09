<?php get_header(); ?>
<!-- untuk mengatur output seperti kita mengklik berdasarkan waktu category dll-->
<main>
	<?php
	if (have_posts() ) { ?>

	<p class="sub_judul">
		<?php
		if (is_category() ){
			echo 'Halaman Kategori '; single_cat_title();
		}else if (is_author() ){
			echo 'Halaman Author ' . get_the_author();
		}else {
			echo 'Halaman Archive ';
		} 
		?>
	</p>

	<?php
		while ( have_posts() ){
			the_post();

			get_template_part('content'); //utk megambil kode yang ada di content.php

		}
	}else {
		echo 'tidak ada post';
	}
	?>
</main>
<?php get_footer(); ?>