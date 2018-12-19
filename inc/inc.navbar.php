<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="/svg/brand.svg" width="32" height="32" alt=""></a><!-- Brand -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <!-- menu -->
      <?php include("inc.menu.php") ?>
      <!-- Search -->
      <form class="form-inline" method="get" action="">
        <input name="q" class="form-control form-control-sm" type="text" placeholder="Search">
      </form>
    </div>
  </div>
</nav>