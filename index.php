<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://kit.fontawesome.com/5ec1d943a3.js" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
      <link rel="icon" href="@asset('iamges/favicon.png')" />
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
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
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
