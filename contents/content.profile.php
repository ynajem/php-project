<div class="container my-3">
  <div class="row">
    <div class="col-md-4 col-lg-3">
      <div class="card">
        <div class="card-body text-center">
          <img src="/svg/user.svg" alt="User" class="rounded-circle mb-3" width="100" height="100">
          <h5 class="bold mb-0">Najem Uness</h5>
          <small class="counter">ESA Coordonateur</small>
          <hr>
          <div class="roboto-condensed bold" data-toggle="tooltip" title="" data-original-title="You currently have 1,113 Points to spend.">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award text-warning"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg> Points: 1113</div>
        </div>
        <div class="list-group list-group-flush">
          <a href="account-profile.html" class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-3"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile</a>
          <a href="account-orders.html" class="list-group-item list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag mr-3"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg> Orders</a>
          <a href="account-wishlist.html" class="list-group-item has-badge list-group-item-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart mr-3"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg> Wishlist <span class="badge rounded badge-primary">2</span></a>
          <a href="account-address.html" class="list-group-item list-group-item-action active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map mr-3"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg> Address</a>
          <a href="account-login.html" class="list-group-item list-group-item-action text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-3"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Logout</a>
        </div>
      </div>
    </div>
    <div class="col mt-3 mt-md-0">
      <div class="card">
        <div class="card-body">
          <form class="form-style-1">
            <h3>Profile</h3><hr>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="profileFirstName">First Name</label>
                <input type="text" class="form-control" id="profileFirstName" value="John">
              </div>
              <div class="form-group col-sm-6">
                <label for="profileLastName">Last Name</label>
                <input type="text" class="form-control" id="profileLastName" value="Thor">
              </div>
              <div class="form-group col-sm-6">
                <label for="profileEmail">Email address</label>
                <input type="email" class="form-control" id="profileEmail" value="john.thor@example.com">
              </div>
              <div class="form-group col-sm-6">
                <label for="profilePhone">Phone Number</label>
                <input type="text" class="form-control" id="profilePhone" value="1-787-376-1552">
              </div>
              <div class="form-group col-sm-6">
                <label for="profileNewPassword">New Password</label>
                <input type="password" class="form-control" id="profileNewPassword">
              </div>
              <div class="form-group col-sm-6">
                <label for="profileConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="profileConfirmPassword">
              </div>
            </div>
            <h3 class="mt-3">Address</h3><hr>
            <div class="form-row">
              <div class="form-group col-12">
                <label for="billingAddress">Address</label>
                <input type="text" class="form-control" id="billingAddress" value="2114  Jadewood Farms">
              </div>
              <div class="form-group col-6 col-sm-5">
                <label for="billingCountry">Country</label>
                <select class="form-control custom-select" id="billingCountry">
                  <option>Choose country</option>
                  <option value="Australia">Australia</option>
                  <option value="Canada">Canada</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="Switzerland">Switzerland</option>
                  <option value="USA" selected="">United States</option>
                </select>
              </div>
              <div class="form-group col-6 col-sm-5">
                <label for="billingCity">City</label>
                <input type="text" class="form-control" id="billingCity" value="Piscataway, New Jersey">
              </div>
              <div class="form-group col-3 col-sm-2">
                <label for="billingZip">ZIP Code</label>
                <input type="number" class="form-control" id="billingZip" value="08854">
              </div>
              <div class="form-group col-12">
                <button type="button" class="btn btn-primary">UPDATE PROFILE</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>