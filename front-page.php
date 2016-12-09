<!DOCTYPE html>
<!-- ini tampilan unutk Home -->
<html>
<head>
	<title><?php the_title(); ?></title>
	<style media="screen" >
		.front-page{
			text-align: center;
		}
		body{
			margin: 50px auto;
			width: 100%;
			background: #f1f1f1;
		}

		h1{
			font-size: 50px;
			text-align: center;
		}
		.custom_post h2{
			font-size: 25px;
		}
		.custom_post a{
			display: inline-block;
			width: 30%;
			margin: 0 1.5%;
			background-color: #fcc;
			padding: 5px;
			text-align: center;
			text-decoration: none;
			color: #333;
		}
	</style>
</head>
<body>


	<div class="front-page">
		<h1> Welcome To My WEB </h1>
		<a href="<?php echo home_url('/article'); ?>">Menuju Article</a>
	</div>



	<div class="custom_post">
		<h2>Post terakhir: </h2>

		<?php
		$custom_post = new WP_Query('cat=1&posts_per_page=3');
		/*cat=1 ||angka 1 ini adalah id dari kategori, cara mengambil id categori dasboard-post-categories-klik nama kategorinya lalu liat di URL akan ada ID nya */

		if ($custom_post->have_posts() ){
			while ($custom_post->have_posts() ){
				$custom_post->the_post(); ?>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<br/>

				<?php
			}
		}else{
			echo 'tidak ada Berita';
		}
		?>
	</div>

</body>
</html>
