    <footer class="l-footer p-footer">
      <div class="l-container">
        <div class="p-footerBottom">
          <div class="l-container">
            <div class="l-wrapper">
              <div class="p-footerBottom__body">
                <?php
                wp_nav_menu(array(
                  "theme_location" => "footer",
                  "container" => false,
                  "menu_class" => "p-footerNav"
                ));
                ?>
                <address class="p-footer__address">
                  <span class="u-visuallyHidden" lang="en">Engress</span>
                  <a href="index.html" class="p-logo -secondary">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-logo.png" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/footer-logo.png, <?php echo get_template_directory_uri(); ?>/assets/img/common/footer-logo@2x.png 2x" />
                  </a>
                  <div class="p-footer__siteinfo">
                    <p class="p-footer__tel">
                      <span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel-white.png" alt="" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/common/tel-white.png, <?php echo get_template_directory_uri(); ?>/assets/img/common/tel-white@2x.png 2x" /></span>
                      0123-456-7890
                    </p>
                    <p class="p-footer__time">平日<time>08:00</time>~<time>20:00</time></p>
                  </div>
                </address>
                <!-- /.p-footerBottom__info -->
              </div>
              <!-- /.p-footerBody -->
            </div>
            <!-- /.l-wrapper -->
          </div>
          <!-- /.l-container -->
        </div>
        <!-- /.p-footerBottom -->
        <p class="l-wrapper p-footer__copyright"><small>&copy; 2020 Engress.</small></p>
      </div>
      <!-- /.l-container -->
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>
