<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panel's Recipes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>
  <body class="bg-light">
    <?php echo $this->include('partials/navbar') ?>
    <?php echo $this->include('partials/recipes/show') ?>

  <?= script_tag('js/dist/bundle.js') ?>
  </body>
</html>
