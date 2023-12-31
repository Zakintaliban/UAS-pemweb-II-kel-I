<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Politeknik Merdeka</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma;
      margin: 0;
      padding: 0;
      background-color: #6b6bfc7c;
    }

    .container-scroller {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .auth-form-light {
      background-color: #d5d5ffb2;
      border-radius: 5px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 400px;
    }

    .auth-form-light .brand-logo {
      text-align: center;
      margin-bottom: 15px;
    }

    .auth-form-light h4 {
      font-size: 24px;
      margin-bottom: 15px;
    }

    .auth-form-light h6 {
      font-weight: 300;
      font-size: 14px;
      margin-bottom: 15px;
    }

    .auth-form-light input[type="email"],
    .auth-form-light input[type="password"] {
      border: 1px solid #c0bfc2;
      border-radius: 15px;
      padding: 10px;
      width: 300px;
      font-size: 14px;
      margin-bottom: 15px;
    }

    .auth-form-light .btn-primary {
      background-color: #007bff;
      color: #fff;
      font-size: 14px;
      border: none;
      cursor: pointer;
      padding: 10px;
      width: 100px;
      border-radius: 15px;
    }

    .auth-form-light .btn-primary:hover {
      background-color: #0056b3;
    }

    .auth-form-light .auth-link {
      font-size: 14px;
    }

    .auth-form-light .font-weight-light {
      font-weight: 300;
    }

    .auth-form-light .text-primary {
      color: #007bff;
    }

    .auth-form-light .mt-4 {
      margin-top: 20px;
    }

    .auth-form-light .my-2 {
      margin-top: 10px;
      margin-bottom: 10px;
    }

    @media screen and (max-width: 576px) {
      .auth-form-light {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="politeknik-merdeka.png" alt="logo">
              </div>
              <h4>Halo!👋 Selamat Datang</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg auth-form-btn" href="../../index.html">Sign In</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>

</html>
