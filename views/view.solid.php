<!doctype html>
<html class="default-style" lang="en">
  <head>
    <?php include("inc.head.php") ?>
  </head>
  <body id="login-page">
    <?php //include("inc.navbar.php") ?>
    <div class="header d-flex justify-content-between align-items-center bg-white p-3" >
      <div class="login-msg">
        <h5 class="font-weight-bold">Login vers PMS</h5>
        <span class="small">Entrez vos identifiants ci-dessous</span>
      </div>
      <div class="logo">
        <a href="#"><img src="img/logo.jpg" alt="blue" title="blue"></a>
      </div>
    </div> <!-- header -->
    <?= $tmpl->content ?>
    <?php include("inc.footer.php") ?>
    <?php include("inc.scripts.php") ?>
  </body>
</html>