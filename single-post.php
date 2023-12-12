<?= get_header(); ?>
    <!-- Страница одной двери -->
    <div class="door-template">
      <div class="container">
        <div class="row">
          <div class="col-6 col-lg-12">
            <div class="door-gallery">
            <?php
              $loop = CFS()->get('door__gallery');
              foreach ($loop as $row) {
                ?>
                <a href="<?= $row['door__img']; ?>" data-caption="<?= $row['door__gallery_description']; ?>">
                  <img src="<?= $row['door__img']; ?>" alt="<?= $row['door__gallery_title']; ?>">
                </a>
                <?php 
              }
            ?>   
            </div>
          </div>
          <div class="col-6 col-lg-12 door-description">
            <h2>
              <?php the_title(); ?> 
              <span>
                <?php 
                  if (CFS()->get('door__stock')) {
                    // В наличии
                    echo CFS()->get('door__stock_true');
                  } else {
                    // Под заказ
                    echo CFS()->get('door__stock_false');
                  }
                ?>
              </span>
            </h2>
            <?php the_content(); ?>
            <h3><?= CFS()->get('door__price'); ?> &#8381;</h3>
            <!-- short-code Contact Form 7 -->
            <?= do_shortcode(CFS()->get('door_shortcode')); ?>

            <!-- Характеристики -->
            <table>
              <caption>
                <?= CFS()->get('door__table_title'); ?>
              </caption>
              <?php
              $loop = CFS()->get('door__table_property');
              foreach ($loop as $row) {
                ?>
                  <tr>
                    <td><?= $row['door__table_key']; ?></td>
                    <td><?= $row['door__table_value']; ?></td>
                  </tr>
                <?php 
              }
            ?>   
            </table>
            <a class="btn" href="/<?= CFS()->get('info__slug'); ?>"><?= CFS()->get('info__slug_title'); ?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Футер -->
<?= get_footer(); ?>