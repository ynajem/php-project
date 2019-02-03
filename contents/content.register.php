<div class="col" id="main-content">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-md-8 col-12">
      <nav class="d-flex justify-content-center mb-4">
        <div class="btn-group nav" role="tablist">
          <a class="btn btn-outline-info active show" data-toggle="tab" href="#register" id="register-tab" role="tab" aria-controls="register" aria-selected="true">Register</a>
          <a class="btn btn-outline-info show" data-toggle="tab" href="#login" id="login-tab" role="tab" aria-controls="login" aria-selected="false">Login</a>
        </div>
      </nav>
      <div class="tab-content">
        <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
          <div class="card shadow-sm card-login-form">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <form>
                    <div class="form-group text-center">Login to your account</div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="loginUsername" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember">
                        <label class="custom-control-label" for="remember">Remember me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">LOGIN</button>
                  </form>
                </div>
                <div class="col-sm-6 mt-2 mt-sm-0">
                  <div class="form-group text-center">OR</div>
                  <div class="btn-group w-100 mb-1">
                    <button class="btn btn-primary active"><i class="fa fa-facebook fa-fw"></i></button>
                    <button class="btn btn-primary btn-block">Login with Facebook</button>
                  </div>
                  <div class="btn-group w-100 mb-1">
                    <button class="btn btn-danger active"><i class="fa fa-google-plus fa-fw"></i></button>
                    <button class="btn btn-danger btn-block">Login with Google+</button>
                  </div>
                  <div class="btn-group w-100">
                    <button class="btn btn-info active"><i class="fa fa-twitter fa-fw"></i></button>
                    <button class="btn btn-info btn-block">Login with Twitter</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade active show" id="register" role="tabpanel" aria-labelledby="register-tab">
          <div class="card shadow-sm">
            <div class="card-body">
              <form>
                <div class="form-row">
                  <div class="form-group col-sm-6">
                    <label for="registerFirstName">First Name</label>
                    <input type="text" class="form-control" id="registerFirstName">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="registerLastName">Last Name</label>
                    <input type="text" class="form-control" id="registerLastName">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="registerEmail">Email address</label>
                    <input type="email" class="form-control" id="registerEmail">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="registerPhone">Phone Number</label>
                    <input type="number" class="form-control" id="registerPhone">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="registerPassword">Password</label>
                    <input type="password" class="form-control" id="registerPassword">
                  </div>
                  <div class="form-group col-sm-6">
                    <label for="registerConfirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="registerConfirmPassword">
                  </div>
                  <div class="form-group col-12">
                    <button type="submit" class="btn btn-success btn-block">REGISTER</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>