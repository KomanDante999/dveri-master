<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php 
      if (is_404()) {
        echo 'Ошибка 404';
      } elseif(is_category( 'doors' )) {
        echo single_cat_title();
      } else {
        the_title();
      }
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body>
  <!-- Меню -->
  <div class="menu">
    <div class="container">
      <div class="row">
        <div class="logo">
          <a href="<?php echo home_url() ?>">
            <!-- <img src="img/logo.png" alt="логотип"> -->
            <?php the_custom_logo(); ?>
          </a>
        </div>
          <?php 
            wp_nav_menu( [
              'theme_location' => 'top',
              'container' => '',
              'container_class' => '',
              'container_id' => ''

            ] );
          ?>
        <div class="phone">
          <!-- вывод фона из ctegory с помощью цикла -->
          <?php
          $settings = get_posts( [
              'numberposts' => 1,
              'category_name' => 'settings',
              'post_type' => 'post',
          ] );

          foreach($settings as $post) {
              setup_postdata($post);
              // Get the catalog_bg custom field value
              $phone = CFS()->get('phone');
              $phone_value = CFS()->get('phone_value');
              if ($phone && $phone_value) {
                echo '<a href="tel:' . esc_html($phone_value) . '">&#9742; ' . esc_html($phone) . '</a>';
              }
          }
          wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>

  