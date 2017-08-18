<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saklar</title>
    <link href="<?php echo base_url()."bootstrap/"; ?>css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div id="login-alert" class="alert alert-<?php echo $this->session->flashdata('class'); ?> col-sm-12"><?php echo $this->session->flashdata('value'); ?></div>
      <div class="col-md-4 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-primary" >
          <div class="panel-heading">
              <div class="panel-title">Log In</div>
          </div>
          <div class="panel-body" >
              <?php echo form_open('Users/Login'); ?>
                  <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                  </div>
                  <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                  </div>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                          <button type='submit' class="btn btn-success" name='login'>Login</button>
                        </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>

    </div>
    <script src="<?php echo base_url()."bootstrap/"; ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url()."bootstrap/"; ?>js/bootstrap.min.js"></script>
  </body>
</html>
