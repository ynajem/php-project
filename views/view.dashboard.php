<!doctype html>
<html lang="en">
<head>
  <?php include("inc.head.php") ?>
</head>
<body class="app">
  <?php include "inc.dashboard.header.php" ?>
  <div id="main-content">
    <?php include "inc.dash.sidebar.php" ?>
    <main id="content" class="py-2"> 
        <?= $content ?>
    </main>
  </div><!-- main-content -->
  <?php include "inc.scripts.php" ?>
</body>
</html>