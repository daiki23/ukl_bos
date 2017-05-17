<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="<?php echo base_url();?>assets/assets2/logcss/css/style.css">


</head>

<body>
  <div class="form">


        <div id="login">
          <h1>Log-In Page</h1>

          <form action="<?php echo base_url();?>index.php/admin/masuk" method="post" id="form-login">

            <div class="field-wrap">
            <label>
              UserName <span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" id="username" name="username" autofocus value=""  class="form-control" />
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" id="password" name="password" autofocus value=""  class="form-control"/>
          </div>

          <p class="forgot"><a href="<?php echo base_url();?>index.php/pendaftaran">Lupa Akun?</a></p>

          <input type="submit" name="submit" value="LOGIN" class="btn btn-block btn-sm btn-danger">
          </form>

        </div>

      </div><!-- tab-content -->

</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="<?php echo base_url();?>assets/assets2/logcss/js/index.js"></script>

</body>
</html>
