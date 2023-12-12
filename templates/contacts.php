<?php 
	/* Template Name: contacts */
	get_header(); 
?>
  <!-- Контакты -->
  <div class="our-contacts">
    <div class="container">
      <div class="row">
        <div class="col-9 col-lg-12">
            <?php
              $loop = CFS()->get('tab-branches__loop');
              foreach ($loop as $row) {
                ?>
                <!-- город -->
                <div class="contacts-block">
                  <h2><?= $row['tab-branches__title']; ?></h2>
                  <div class="contacts-inner">
                    <div class="contacts-card">
                      <!-- пишите -->
                      <img src="<?= CFS()->get('contacts-message__icon'); ?>" alt="<?= CFS()->get('contacts-message'); ?>">
                      <h3><?= CFS()->get('contacts-message'); ?></h3>
                      <p><?= $row['tab-branches__email']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <!-- звоните -->
                      <img src="<?= CFS()->get('contacts-call__icon'); ?>" alt="<?= CFS()->get('contacts-call'); ?>">
                      <h3><?= CFS()->get('contacts-call'); ?></h3>
                      <p><?= $row['tab-branches__phone']; ?></p>
                    </div>
                    <div class="contacts-card">
                      <!-- приезжайте -->
                      <img src="<?= CFS()->get('contacts-address__icon'); ?>" alt="<?= CFS()->get('contacts-address'); ?>">
                      <h3><?= CFS()->get('contacts-address'); ?></h3>
                      <p><?= $row['tab-branches__address']; ?></p>
                    </div>
                  </div>
                  <!-- map -->
                  <?= $row['tab-branches__map']; ?>
                </div>
                <?php 
              }
            ?>   



        </div>
        <div class="col-3 col-lg-12" id="cities">
          <h2><?= CFS()->get('dealers__title') ?></h2>
          <input type="text" class="search" placeholder="Поиск">
          <ul class="list">
            <?php 
              $loop = CFS()->get('dealers__loop');
              foreach($loop as $row) {
            ?>
            <li>
              <p class="city"><?= $row['dealers__address'] ?></p>
            </li>  
            <?php 
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Футер -->
<?php get_footer(); ?>