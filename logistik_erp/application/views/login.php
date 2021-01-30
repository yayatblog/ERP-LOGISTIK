<!doctype html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <title>Login System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/style.css" /> -->
  <link rel="stylesheet" href="<?= base_url('assets/css3/style.css');?>">
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <!-- remember, jQuery is completely optional -->
  <!-- <script type='text/javascript' src='js/jquery-1.11.1.min.js'></script> -->
  <!-- <script type='text/javascript' src='jquery.particleground.js'></script> -->
  <script type='text/javascript' src='<?= base_url('assets/jquery.particleground.js');?>'></script>
  <script type='text/javascript' src='<?= base_url('assets/demo.js');?>'></script>
  <script type='text/javascript' src='<?= base_url('assets/jquery-2.2.4.min.js');?>'></script>
  <link rel="stylesheet" href="<?= base_url('assets/css3/font-awesome.min.css');?>">

  <!-- <script type='text/javascript' src='js/demo.js'></script> -->
  <!-- <script type='text/javascript' src='jquery-2.2.4.min.js'></script> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> -->
  <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
  <style>
    .bg-login{
      background-image: url(<?php echo base_url("assets/img/logistik.jpg");?>);
      background-size:cover;
    }
    .login {
      position: fixed;
      top: 50%;
      left: 45%;
      transform: translate(-30%, -50%);
      background: rgba(4, 29, 23, 0.5);
      padding: 50px;
      width: 360px;
      box-shadow: 0px 0px 25px 10px black;
      border-radius: 15px;
    }

    .avatar {
      font-size: 30px;
      background: #E59866;
      width: 50px;
      height: 50px;
      line-height: 50px;
      position: fixed;
      left: 50%;
      top: 0;
      transform: translate(-50%, -50%);
      text-align: center;
      border-radius: 50%;
    }

    .login h2 {
      text-align: center;
      color: white;
      font-size: 30px;
      font-family: sans-serif;
      letter-spacing: 3px;
      padding-top: 0;
      margin-top: -20px;
    }

    .box-login {
      display: flex;
      justify-content: space-between;
      margin: 10px;
      border-bottom: 2px solid white;
      padding: 8px 0;
    }

    .box-login i {
      font-size: 23px;
      color: white;
      padding: 5px 0;
    }

    .box-login input {
      width: 85%;
      padding: 5px 0;
      background: none;
      border: none;
      outline: none;
      color: white;
      font-size: 18px;
    }

    .box-login input::placeholder {
      color: white;
    }

    .btn-login .box-login input:hover {
      background: rgba(10, 10, 10, s 0.5);
    }

    .btn-login {
      margin-left: 10px;
      margin-bottom: 20px;
      background: none;
      border: 1px solid white;
      width: 92.5%;
      padding: 10px;
      color: white;
      font-size: 18px;
      letter-spacing: 3px;
      cursor: pointer;
    }

    .btn-login:hover {
      background: rgba(12, 30, 15, 0.5);
    }

    .bottom {
      margin-left: 10px;
      margin-right: 10px;
      display: flex;
      justify-content: space-between;
    }

    .bottom a {
      color: white;
      font-size: 15px;
      text-decoration: none;
    }

    .bottom a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<!-- <body style="background-size: cover;" img src=""> -->
<body class="bg-login">
	

  <div id="particles">
    <div id="intro">
      <div class="login">

        <div class="avatar">
          <i class="fa fa-user"></i>
        </div>

        <h2>Login Form</h2>
        <form method="post" action="<?= base_url('auth/login');?>" role="login">
        
        <div class="box-login">
          <i class="fa fa-user"></i>
          <input type="text" placeholder="Email" name="email">
        </div>

        <div class="box-login">
          <i class="fa fa-lock"></i>
          <input type="password" placeholder="Password" class="form-password" name="password">
        </div>
        <div class="">
          <input type="checkbox" class="form-checkbox" id="" name="password">Lihat Password
          <!-- <label class="custom-control-label" for="customControlAutosizing"></label> -->
        </div>

        <!-- <button type="submit" name="login" class="btn-login">Login</button> -->
        <button type="submit" name="submit" value="login" class="btn-login"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>
        <div class="bottom">
          <!-- <a href="">Register Now</a> -->
          <a href="http://localhost/erpcanon2/auth/registrasi"> Daftar Akun</a>
          <a href="#">Forgot Password</a>
        </div>
      </div>
      </form>
    </div>
  </div>

  <!-- <a href="https://github.com/jnicol/particleground"><img style="position: absolute; top: 0; right: 0; border: 0;"
      src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67"
      alt="Fork me on GitHub"
      data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a> -->

</body>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>

</html>