<?php
require_once("views/includes/header.php");
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
          echo "
          <script type='text/javascript'>
            document.addEventListener('DOMContentLoaded', function(event) {
              swal('Error!','$error','error');
            });
         </script>
         ";        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
          echo "
          <script type='text/javascript'>
            document.addEventListener('DOMContentLoaded', function(event) {
              swal('$message');
            });
         </script>
         ";
        }
    }
}
?>

<!-- login form box -->
<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>


                  <form method="POST" class="user" action="index.php" name="loginform" autocomplete="off">
                    <div class="form-group">
                      <input style="display: none;" type="email" >  
                      <input name="user_name" type="text" class="form-control " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address or User Name..." autocomplete="new-password">
                    </div>
                    <div class="form-group">
                      <input name="user_password" type="password" class="form-control f" id="exampleInputPassword" placeholder="Password" autocomplete="new-password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    
                    <hr>
                    
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                    <i class="fas fa-key "></i> Login
                    </button>
                  </form>


                  <hr>
                  <!--
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                  -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



<?php require_once("views/includes/footer.php"); ?>
