
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/admin//admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Adm LaraBlog</h1>
                  </div>
                  <p>Менеджерский аккаунт блога</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="get" class="form-validate">
                    <div class="form-group">
                      <input id="login-username" type="text" name="login" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">Ваш ник</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Пароль</label>
                    </div>
                    
                    <button id="login" href="/amonitor/loginadm" class="btn btn-primary">Войти</button>

                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  </form><a href="#" class="forgot-pass">Забыли пароль?</a><br><small>У вас еще нет зарегистрированного аккаунта? </small><a href="/registermng" class="signup">Создать аккаунт!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/admin/js/front.js"></script>
  </body>
</html>