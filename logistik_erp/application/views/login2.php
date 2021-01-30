<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $judul;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('assets2/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets2/vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets2/vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?= base_url('assets2/vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?= base_url('assets2/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?= base_url('assets2/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?= base_url('assets2/css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?= base_url('assets2/css/custom-default.css') ?>" type="text/css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script type="text/javascript" src="<?= base_url('assets2/vendor/jquery/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/jquery/jquery-ui.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/popper.js/umd/popper.min.js') ?>">
</script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/jquery.cookie/jquery.cookie.js') ?>">
</script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/chart.js/Chart.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/charts-home.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets2/js/front.js') ?>"></script>
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo"><span>Vitrans</span></div>
            <!-- <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('delete_message') }}</div>  -->
            
            <form method="post" action="<?= base_url('login/login_aksi');?>" role="login">

              <div class="form-group-material">
                <input id="login-username" type="text" name="username" required class="input-material" value="">
                <label for="login-username" class="label-material">Username</label>
                    <p>
                        <!-- <strong><?
                        //= $errors->first('name');?></strong> -->
                    </p>
              </div>
              
              <div class="form-group-material">
                <input id="login-password" type="password" name="password" required class="input-material" value="">
                <label for="login-password" class="label-material">Password</label>
                    <p>
                        <!-- <strong><?
                        //= $errors->first('name');?></strong> -->
                    </p>
              </div>
              <button type="submit" name="submit" value="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>

              <!-- <button type="submit" class="btn btn-primary btn-block">Login</button> -->
            </form>
            <!-- This two button for demo only-->
            <!-- <button type="submit" class="btn btn-success admin-btn">LogIn as Admin</button>
            <button type="submit" class="btn btn-info staff-btn">LogIn as Staff</button>
            <br><br> -->
            <a href="" class="forgot-pass">Forgot Password</a>
            <p>Do not have an account?</p><a href="" class="signup">Register</a>
          </div>
          <div class="copyrights text-center">
            <p>Developed By<a href="https://winstarlink.com" class="external">Winstarlink</a></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript">
    $('.admin-btn').on('click', function(){
        $("input[name='name']").focus().val('admin');
        $("input[name='password']").focus().val('admin');
    });

  $('.staff-btn').on('click', function(){
      $("input[name='name']").focus().val('staff');
      $("input[name='password']").focus().val('staff');
  });
  // ------------------------------------------------------- //
    // Material Inputs
    // ------------------------------------------------------ //

    var materialInputs = $('input.input-material');

    // activate labels for prefilled values
    materialInputs.filter(function() { return $(this).val() !== ""; }).siblings('.label-material').addClass('active');

    // move label on focus
    materialInputs.on('focus', function () {
        $(this).siblings('.label-material').addClass('active');
    });

    // remove/keep label on blur
    materialInputs.on('blur', function () {
        $(this).siblings('.label-material').removeClass('active');

        if ($(this).val() !== '') {
            $(this).siblings('.label-material').addClass('active');
        } else {
            $(this).siblings('.label-material').removeClass('active');
        }
    });
</script>