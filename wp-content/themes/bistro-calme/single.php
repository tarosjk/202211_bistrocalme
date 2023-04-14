<?php get_header(); ?>

	<h2 class="pageTitle">最新情報<span>NEWS</span></h2>

	<?php get_template_part('template-parts/breadcrumb'); ?>

	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-9">

				<?php if(have_posts()): ?>
					<?php while(have_posts()): the_post(); ?>
					<article class="article">
						<header class="article_header">
							<h2 class="article_title"><?php the_title(); ?></h2>
							<div class="article_meta">
								<?php the_category(); ?>
								<time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日') ?></time>
							</div>
						</header>

						<div class="article_body">
							<div class="content">
								<?php the_content(); ?>
								<?php 
								$artist_names = get_post_meta(get_the_ID(), 'artist-name');
								// var_dump($artist_names[0]);
								foreach($artist_names as $name) {
									echo $name;
								}
								?>
								<div>
									<p><?= SCF::get('artist'); ?></p>
									<p><?= SCF::get('label'); ?></p>
									<p>
									<?php
										$img_id = SCF::get('jacket');
										$img_url = wp_get_attachment_url($img_id);
										var_dump(wp_get_attachment_image_src($img_id, 'medium'));
									?>
									<img src="<?= $img_url; ?>" alt="">
									</p>
									<p><?= SCF::get('release-date'); ?></p>
								</div>
							</div>
						</div>

						<div class="postLinks">
							<div class="postLink postLink-prev">
								<?php previous_post_link(
									'%link',
									'<i class="fas fa-chevron-left"></i>%title'
								); ?>
							</div>
							<div class="postLink postLink-next">
								<?php next_post_link(
									'%link',
									'%title<i class="fas fa-chevron-right"></i>'
								); ?>
							</div>
						</div>
					</article>
				<?php endwhile; endif; ?>
				</div>

				<div class="col-12 col-md-3">
					<?php get_sidebar('latests'); ?>
					<?php get_sidebar('categories'); ?>
					<?php get_sidebar('archives'); ?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>