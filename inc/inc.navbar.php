<nav class="navbar navbar-expand-sm navbar-dark bd-navbar mb-4">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="/svg/brand.svg" width="32" height="32" alt=""></a><!-- Brand -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <?php include("inc.menu.php") ?>
      <form method="get" action="/api">
        <input name="record" class="form-control form-control-sm" type="text" placeholder="Search">
      </form><!-- Form Search -->
    </div><!-- menu -->
  </div><!-- container-fluid -->
</nav>