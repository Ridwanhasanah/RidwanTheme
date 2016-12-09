<footer>
    <nav>
			<?php 
	            $args = array('theme_location' => 'footer_menu'); //ini agar tampil di dasboard appreance
	            wp_nav_menu($args); //untuk menampilkan menu di header site
	            /*ini terhubung degnan functions.php*/
	            ?>
	</nav>
	&copy; <?php bloginfo('name'); echo " - " . date('Y');?>
</footer>
<?php wp_footer(); ?>
</body>
</html>