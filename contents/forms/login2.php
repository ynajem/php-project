<form class="form-signin text-center" method="post" action="login.php">
  <img class="mb-4" src="/svg/radar.svg" alt="" height="46">
  <div class="form-group">
    <label for="username" class="sr-only">Username :</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
  </div>
  <div class="form-group">
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
  </div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>