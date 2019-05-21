<!doctype html>
<html class="default-style" lang="en">
  <head>
    <?php include("inc.head.php") ?>
  </head>
  <body>
    <div id="main">
      <?php include("inc.navbar-dark.php") ?>
      <div id="main-content">
        <div class="container">
          <div class="row">
            <?= $content; ?>           
          </div>
        </div>
      </div><!-- #main-content -->
    </div><!-- #main -->
    <?php include("inc.footer1.php") ?>
    <?php include("inc.scripts.php") ?>
  </body>
</html>
