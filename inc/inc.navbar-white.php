<nav id="navbar-white" class="navbar navbar-expand-lg navbar-light bg-white py-2">
  <div class="container">
      <a class="navbar-brand mr-3" href="/"><img src="/svg/tinysnippets-logo.svg" height="32" alt=""></a><!-- Brand -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="members" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Members
            </a>
            <div class="dropdown-menu" aria-labelledby="members">
              <a class="dropdown-item" href="/login">Login</a>
              <a class="dropdown-item" href="/logout">Logout</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/register">Register New Account</a>
            </div>
          </li>          
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="morepages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              More Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="morepages">
              <a class="dropdown-item" href="/list1">List 1</a>
              <a class="dropdown-item" href="/list2">List 2</a>
              <a class="dropdown-item" href="/invoice">Invoice</a>
              <a class="dropdown-item" href="/blog-list">Blog List</a>
              <a class="dropdown-item" href="/about-us">About Us</a>
              <a class="dropdown-item" href="/buttons">Buttons</a>
              <a class="dropdown-item" href="/404">404 Page</a>
              <a class="dropdown-item" href="/rich-editor">Rich Editor</a>
            </div>
          </li>
        </ul>
        <form method="get" action="/api">
          <input name="record" class="form-control form-control-sm" type="text" placeholder="Search">
        </form><!-- search form -->
        <button type="submit" class="btn btn-white ml-2"><span class="fa fa-gear"></span></button>
        <a href="/profile" class="btn btn-white ml-1"><span class="fa fa-user"></span></a>
      </div>
  </div>
</nav>