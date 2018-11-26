<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand" href="/">
      <img src="svg/brand.svg" width="35" height="35" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <!-- menu -->
      <?php include("inc/inc.menu.php") ?>
      <!-- Search -->
      <form class="form-inline" method="get" action="">
        <input name="q" class="form-control" type="text" placeholder="Search">
      </form>
    </div>
  </div>
</nav>
