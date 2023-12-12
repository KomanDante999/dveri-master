<?php 
	/* Template Name: Main */
	get_header(); 
?>
<!-- Шапка -->
<div class="header" style="background-image: url(<?= CFS()->get('main-header__bg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-6 col-lg-12">
				<div class="header-inner">
					<!-- Каталог -->
					<div class="header-catalog">
						<h2><?= CFS()->get('main-header__catalog_title'); ?></h2>
						<div class="doors">
							<?php
								$loop = CFS()->get('main-header__catalog_loop');
								foreach($loop as $row) {
									$door_img = $row['main-header__catalog_img'];
									$door_text = $row['main-header__catalog_text'];
									
									echo '
										<div class="door">
											<div class="name" style="background-image: url(' . esc_url($door_img) . ')">'. esc_html($door_text) . '</div>
										</div>
									';
								};
							?>
						</div>
						<a class="btn" href="/category/<?= CFS()->get('catalog__btn_link'); ?>"><?= CFS()->get('catalog__btn_text'); ?></a>
					</div>
					<!-- На заказ -->
					<div class="header-order">
						<h2><?= CFS()->get('	main-header__order_title	'); ?></h2>
						<div class="doors">
							<?php
								$loop = CFS()->get('main-header__order_loop');
								foreach($loop as $row){
									$door_img = $row['main-header__order_img'];
									$door_text = $row['main-header__order_text'];
									echo '
									<div class="door">
										<div class="name" style="background-image: url(' . esc_url( $door_img ) .')">' . esc_html( $door_text ) . '</div>
									</div>
									';
								};
							?>
						</div>
						<a class="btn" href="/<?= CFS()->get('order__btn_link'); ?>"><?= CFS()->get('order__btn_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Преимущества  -->
<?php get_header( 'advantages' ) ?>

<!-- О нас -->
<div class="about" style="background-image: url(<?= CFS()->get('main-about__bg'); ?>)">
	<div class="container">
		<div class="row about-inner">
			<div class="col-6 col-lg-12">
				<h2><?= CFS()->get('main-about__title'); ?>, <span><?= CFS()->get('main-about__title_semantic'); ?>.</span></h2>
				<?= CFS()->get('main-about__text'); ?>
			</div>
			<div class="col-6 col-lg-12 text-center">
				<a href="/category/<?= CFS()->get('main-about__btn_link'); ?>" class="btn"><?= CFS()->get('main-about__btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>

<!-- Популярные товары -->
<div class="popular" style="background-image: url(<?= CFS()->get('main-popylar__bg'); ?>)">
	<div class="container">
		<div class="row popular-title">
			<h2><?= CFS()->get('main-popylar__title'); ?></h2>
		</div>
		<div class="row popular-goods">
			<?php
					$posts = get_posts( [
						'numberposts' => 8,
						'category_name' => 'doors__popular',
						'orderby' => 'title ',
						'order' => 'ASC',
						'post_type' => 'post',
						'suppress_filters' => true
					] );
					foreach($posts as $post){
						setup_postdata( $post );
				?>
					<div class="col-3 col-lg-6 col-sm-12 product">
						<?php the_post_thumbnail(); ?>
						<h3><?php the_title(); ?></h3>
						<div><?= CFS()->get('door__price'); ?> &#8381;</div>
						<a href="<?php the_permalink(); ?>" class="btn"><?= CFS()->get('door__btn-title'); ?></a>
					</div>
				<?php 
					}
					wp_reset_postdata();
					?>

		</div>
		<div class="row">
			<div class="col-12 text-center">
				<a href="/category/<?= CFS()->get('main-popylar__btn_link'); ?>" class="btn"><?= CFS()->get('main-popylar__btn_text'); ?></a>
			</div>
		</div>
	</div>
</div>

<!-- Форма обратной связи -->
<div class="contacts" style="background-image: url(<?= CFS()->get('main-form__bg'); ?>">
	<div class="container">
		<div class="row">
			<div class="col-4 col-lg-12 contacts-item">
				<h3>З<?= CFS()->get('main-form__title'); ?></h3>
				<?= CFS()->get('main-form__text'); ?>
				<?= do_shortcode( CFS()->get('main-form__shortcode') ) ; ?>
			</div>
			<!-- карточки -->
			<?php
				$loop = CFS()->get('main-form__loop');
				foreach($loop as $row) {
					$img_url = $row['form-card__img'];
					$title = $row['form-card__title'];
					$text = $row['form-card__text'];
					echo '
						<div class="col-4 col-lg-6 col-sm-12 text-center contacts-item">
							<img src=" ' . esc_url( $img_url ) . ' " alt=" ' . esc_html( $title ) . ' ">
							<h3>' . esc_html( $title ) . '</h3>
							<p>' . esc_html( $text ) . '</p>
						</div>
					';
					?>
					<?php
				}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>