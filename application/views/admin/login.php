<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap --> 
    <?php $this->load->view("admin/_partials/head.php") ?>
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <h2 align="center" class="form-signin-heading">Login Admin</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
    </div> <!-- /container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/jquery/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
  </body>
</html>