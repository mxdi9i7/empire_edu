
      <!-- Footer -->
      <footer class="g-bg-secondary g-pt-100 g-pb-50">
        <div class="container">
          

          <!-- Footer Copyright -->
          <div class="row justify-content-lg-center align-items-center text-center">
            <div class="col-sm-6 col-md-4 col-lg-3 order-md-3 g-mb-30">
              <a class="u-link-v5 g-color-text g-color-primary--hover" href="#">
                <i class="align-middle mr-2 icon-real-estate-027 u-line-icon-pro"></i>
                纽约市曼哈顿岛，美国
              </a>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-3 order-md-2 g-mb-30">
              <!-- Social Icons -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle" href="#">
                    <i class="g-font-size-default fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle" href="#">
                    <i class="g-font-size-default fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle" href="#">
                    <i class="g-font-size-default fa fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle" href="#">
                    <i class="g-font-size-default fa fa-youtube"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-2">
                  <a class="u-icon-v1 u-icon-size--sm u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-primary--hover rounded-circle" href="#">
                    <i class="g-font-size-default fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
              <!-- End Social Icons -->
            </div>

            <div class="col-md-4 col-lg-3 order-md-1 g-mb-30">
              <p class="g-color-text mb-0">帝国教育 - Since 1999</p>
            </div>
          </div>
          <!-- End Footer Copyright -->
        </div>
      </footer>
      <!-- End Footer -->

      <!-- Go to Top -->
      <a class="js-go-to u-go-to-v1 u-shadow-v32 g-width-40 g-height-40 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-bg-main--focus g-font-size-12 rounded-circle" href="#" data-type="fixed" data-position='{
       "bottom": 15,
       "right": 15
     }' data-offset-top="400"
        data-compensation="#js-header"
        data-show-effect="slideInUp"
        data-hide-effect="slideInDown">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
      <!-- End Go to Top -->
    </main>

    <!-- JS Global Compulsory -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/jquery/jquery.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/popper.min.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/hs-megamenu/src/hs.megamenu.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/slick-carousel/slick/slick.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/vendor/fancybox/jquery.fancybox.min.js"></script>

    <!-- JS Unify -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/hs.core.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.header.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/helpers/hs.hamburgers.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.dropdown.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/helpers/hs.height-calc.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.carousel.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.popup.js"></script>
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="https://bctc-cdn.nyc3.digitaloceanspaces.com/unify/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      $(document).on('ready', function () {
          
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

          of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });

          of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
          afterOpen: function () {
            $(this).find('input[type="search"]').focus();
          }
        });

           
        $.HSCore.components.HSCarousel.init('[class*="js-carousel"]');

           
        $.HSCore.helpers.HSHeightCalc.init();

          
        $.HSCore.components.HSPopup.init('.js-fancybox');

           
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });
    </script>
    <script src="assets/js/index.js"></script>
  </body>
</html>