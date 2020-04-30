<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

  </head>
  <body class="bg-light">
    <?php echo $this->include('partials/navbar') ?>
    <?php echo $this->include('partials/edit_rec') ?>

  <?= script_tag('js/dist/bundle.js') ?>
  </body>
</html>
