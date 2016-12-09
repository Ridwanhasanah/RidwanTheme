<?php get_header(); ?>

<main>
	<?php
	if (have_posts() ) {
		while ( have_posts() ){
			the_post(); 

			get_template_part('content', get_post_format());
			/*get_post_format() agar wordpres meriksa contentnya apa , jika bukan content standart maka wordpress akan mencari konten lain*/

		}
	}else {
		echo 'tidak ada post';
	}
	?>
</main>
<aside >
	<?php dynamic_sidebar('sidebar1');?>
</aside>

<?php get_footer(); ?>

