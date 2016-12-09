<?php
//load scrip

function load_file(){
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
}

add_action('wp_enqueue_scripts', 'load_file');


//----------the_excert ini untuk menghilangkan [...] yang ada pada Beranda pos
function get_excerpt_length(){//utk mengembalikan kata, berapa kata yang akan di tampilkan
	return 55;
}

function return_excerpt_text(){ //utk menukar bacaan
	return '';
}

add_filter('excerpt_more', 'return_excerpt_text'); //excerpt_more utk mengambil tex yang ingin di tampilkan
add_filter('excerpt_length', 'get_excerpt_length');//utk mengambil panjangnya



function nambah_image(){

register_nav_menus(array(
	'main_menu'   => 'Menu Utama', //ini terhubung dengan header.php
	'footer_menu' =>  'Menu Footer' //ini terhubung dengan footer.php
	));

//menambahkan featured image
add_theme_support('post-thumbnails');
add_image_size('big_thumb', 550,350 , true);
add_image_size('small_thumb', 150,150 , true); //utk ukuran gambar yang tampil
//parameter 1 untuk ukuran gambar besar atau kecil
//parameter 2 dan 3 untuk ukuran lebar dan tingginya
//parameter 4 untuk crop atau tidak, klo true maka crop

add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}

add_action('after_setup_theme', 'nambah_image'); //after_setup_theme ada fungsi utk menset setelah tema di seting
/*dan tambahkan fugnsi <?php the_post_thumbnail(); ?> di content.php*/


function widget_setup(){
	$args = array(
		'name' => "Sidebar pertama",
		'id'   => "sidebar1");

	$args2 = array(
		'name' => "Sidebar kedua",
		'id'   => "sidebar2");

	register_sidebar($args);
	register_sidebar($args2);
}

add_action('widgets_init', 'widget_setup');
?>