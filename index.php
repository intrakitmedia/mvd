<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://kit.fontawesome.com/5ec1d943a3.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
      <?php
      $image = \Roots\asset('images/favico.png')->uri();
      ?>
      <link rel="icon" href="<?php echo $image; ?>" />
      <script>
          (function () {
              var zi = document.createElement('script');
              zi.type = 'text/javascript';
              zi.async = true;
              zi.referrerPolicy = 'unsafe-url';
              zi.src = 'https://ws.zoominfo.com/pixel/6206c7acd3071a0013fad017';
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(zi, s);
          })();
      </script>

      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
          })(window,document,'script','dataLayer','GTM-PFTXPG2');</script>
      <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFTXPG2"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
    <noscript>
        <img src="https://ws.zoominfo.com/pixel/6206c7acd3071a0013fad017" width="1" height="1" style="display: none;" />
    </noscript>
  </body>
</html>
