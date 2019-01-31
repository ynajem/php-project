<!doctype html>
<html class="default-style" lang="en">
  <head>
    <?php include("inc.head.php") ?>
  </head>
  <body>
    <div id="main">
      <?php include("inc.navbar-white.php") ?>
      <?php include("inc.navbar-dark.php") ?>
      <div id="main-content">
        <?= $tmpl->content; ?>           
      </div><!-- #main-content -->
    </div><!-- #main -->
    <?php include("inc.footer.php") ?>
    <?php include("inc.scripts.php") ?>
  </body>
</html>
