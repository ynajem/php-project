<nav id="navbar-white" class="navbar navbar-expand-lg navbar-light bg-white py-2">
<div class="container">
    <a class="navbar-brand mr-3" href="/"><img src="/svg/freelancer-logo.svg" height="32" alt=""></a><!-- Brand -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/dash">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Members
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/login">Login</a>
            <a class="dropdown-item" href="/logout">Logout</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/register">Register New Account</a>
          </div>
      </ul>
      <form method="get" action="/api">
        <input name="record" class="form-control form-control-sm" type="text" placeholder="Search">
      </form><!-- search form -->
    </div>
</div>
</nav>