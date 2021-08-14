<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>SELAMAT DATANG</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/arc/sign-in/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/arc/sign-in/signin.css');?>" rel="stylesheet">
    <style>

      #a{
        border-radius: 30px;
        margin-top: 4px;
        color: black;
      }
      #b{
        border-radius: 30px;
        margin-top: 4px;
        margin-bottom: 1px;
        color: black;
      }
      #c{
        border-radius: 30px;
        margin-top: 30px;
        color: black;
        

      }
      .form-signin{
        /*background: #ADD8E6;*/
        background: #E0FFFF;
          /*#E0FFFF*/
        border-radius: 30px;
      }
    </style>
  </head>

  <body class="text-center"  style="background-image: url('assets/img/logo2.jpg');">


     <?php echo form_open('auth','class="form-signin"');?>
     
      <?php echo $this->session->flashdata('pesan'); ?>

      
        <label for="inputEmail" class="sr-only">Email address</label>
                      <input id="a" type="email" name="email" class="form-control form-control-user" id="exampleInputemail" aria-describedby="emailHelp" placeholder="Email..." value="<?= set_value('email') ?>" autofocus >
                      <?= form_error('email','<small class="text-danger pl-3">','</small>'); ?>

                    
                      <input id="b" type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password..." autofocus>
                      <?= form_error('password','<small class="text-danger pl-3">','</small>'); ?>
                    
        <button  id="c" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
        <!-- <a style="color: black;" class="small" href="<?php echo base_url('Auth/regis_'); ?>">Buat Akun Baru!</a> -->
        <!-- <a style="color: black;" class="small" href="<?php echo base_url('Auth/Ureset_password'); ?>">Lupa Password?</a> -->
        <!-- <br> -->
      <p class="mt-5 mb-3 text-muted"><b style="color: black;">ALDI REZEKI RAMDANI | 10119273<br> &copy; <?php echo date('Y'); ?></b></p>
	  <p class="mt-5 mb-3 text-muted"><b style="color: black;">admin@gmail.com | admin</b></p>
                    
                    

    <?php echo form_close(); ?>

  </body>
</html>
