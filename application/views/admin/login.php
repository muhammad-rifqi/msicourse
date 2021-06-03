<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSI Courses Admin Dashboad </title>
    <!-- Core CSS - Include with every page -->
    <link href="<?= base_url();?>asset/backend/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?= base_url();?>asset/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?= base_url();?>asset/backend/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="<?= base_url();?>asset/backend/css/style.css" rel="stylesheet" />
      <link href="<?= base_url();?>asset/backend/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
             <h1 style="color:white">MSI COURSES</h1>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="<?= base_url('admin/proses_login')?>">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?= base_url();?>asset/backend/plugins/jquery-1.10.2.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url();?>asset/backend/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
