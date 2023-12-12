<?php 
	/* Template Name: about */
	get_header(); 
?>
  <!-- О компании -->
  <div class="about-company" style="background-image: url(<?= CFS()->get('about_bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <img src="<?= CFS()->get('about_img'); ?>" alt="О компании">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Преимущества  -->
	<?php get_header( 'advantages' ) ?>
  <!-- Технический паспорт -->
  <div class="pasport" style="background-image: url(<?= CFS()->get('about-pasport__bg'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?= CFS()->get('about-pasport__title'); ?></h2>
          <p><?= CFS()->get('about-pasport__text'); ?></p>
          <!-- Открыть -->
          <a href="<?= CFS()->get('about-pasport__btn-open_file');?>" class="btn" target="_blank"><?= CFS()->get('about-pasport__btn-open_title'); ?> </a>
          <!-- Скачать -->
          <a href="<?= CFS()->get('about-pasport__btn-download_file');?>" class="btn" download=""><?= CFS()->get('about-pasport__btn-download_title');?></a>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>