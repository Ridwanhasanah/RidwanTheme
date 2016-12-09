<?php if (is_single() ): ?>

<h3> <?php the_title(); ?> </h3>
<?php the_post_thumbnail('big_thumb'); ?> <!-- ini terhubung dengan function.php -->

<p> <?php the_content(); ?> </p>
<?php the_post_thumbnail('big_thumb'); ?> <!-- ini terhubung dengan function.php -->

<?php elseif (is_page() ): ?>

<h3> Halaman <?php the_title(); ?> </h3>
<p> <?php the_content(); ?> </p>


<?php else : ?>

<h3><a href=" <?php the_permalink(); ?>"><?php the_title();?></a></h3>
<!-- the_permalink(); di gunakan untuk membuat title content agar bisa d klik -->
<p>
	<?php echo get_the_excerpt(); //utk menampilkan sbagian tulisan pos ?>
	<a href="<?php the_permalink(); ?>"> See more ...</a>	
</p>

<p class="info_meta">
	<a href="<?php echo get_author_posts_url(get_the_author_meta('ID') );?>">
		<!-- ini digunakan agar autornya bisa di klik --> 	
		<?php the_author(); //utk menampilkan siapa penulisnya ?>
	</a>
			<?php
			 echo ' || '; the_time('F j, Y'); ?> at <?php the_time('g:i a'); //utk menampilkan waktu tulisan di buat
		     echo ' || Kategory : '; the_category(', '); //utk menampilkan category tulisan
	    	?>

</p>

<?php the_post_thumbnail('small_thumb'); ?> <!-- ini terhubung dengan function.php -->

<?php endif; ?>