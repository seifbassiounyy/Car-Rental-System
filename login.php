<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Car Rental Form</title>
  <link rel="stylesheet" href="./login.css">
</head>

<body>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
<div id="form">
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
      <div id="userform">
        <ul class="nav nav-tabs nav-justified" role="tablist">
          <li class="active"><a href="#signup"  role="tab" data-toggle="tab">Sign up</a></li>
          <li><a href="#login"  role="tab" data-toggle="tab">Log in</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active in" id="signup">
            <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
            <form id="signup">
              <div class="row">
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="first_name" placeholder="First Name">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <div class="form-group">
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" id="phone" placeholder="Phone">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <select name="format" class="form-control" id="format">
                  <option selected disabled>Select your country</option>
                  <option value="egy">Egypt</option>
                  <option value="usa">United States</option>
                  <option value="ksa">Saudie Arabia</option>
                </select>
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="ID" placeholder="National ID">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Confirm Password">
                <p class="help-block text-danger"></p>
              </div>
              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block"/>
                Sign up
                </button>
              </div>
            </form>
          </div>
          <div class="tab-pane fade in" id="login">
            <h2 class="text-uppercase text-center"> Log in</h2>
            <form id="login">
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <p class="help-block text-danger"></p>
              </div>
              <br>
              <div class="form-group">
                <input type="radio" name="user" value="user" checked> User<br>
                <input type="radio" name="user" value="admin"> Admin<br>
              </div>

              <div class="mrgn-30-top">
                <button type="submit" class="btn btn-larger btn-block"/>
                Log in
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
	<p><a href="">Contact us</a></p>
</footer>


<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
  <script  src="./script.js"></script>

</body>
</html>