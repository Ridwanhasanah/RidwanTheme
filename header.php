<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name')?></title>
	<?php wp_head();?>
</head>
<body>

	<header>
		<h1> <a href="<?php echo home_url(); ?>"> <?php bloginfo('name'); ?> </a> </h1>
		<h2><?php bloginfo('description'); ?> </h2>
		<nav>
			<?php 
	            $args = array('theme_location' => 'main_menu'); //ini agar tampil di dasboard appreance
	            wp_nav_menu($args); //untuk menampilkan menu di header site
	            /*ini terhubung degnan functions.php*/
	            ?>
	    </nav>
	    <div id="search_submit">
	    	<?php get_search_form(); //utk menambahkan fungsi search ?> 
	    </div>
	    <div class="clear"></div>
</header>

