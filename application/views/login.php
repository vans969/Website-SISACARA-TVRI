<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <title>Login - APP SISACAR</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/sleek.css" />

    <!-- FAVICON -->
    <link href="<?php echo base_url(); ?>assets/img/Logo TVRI.png" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="" id="body">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="app-brand">
                            <a href="/index.html">
                                <img src="<?php echo base_url(); ?>assets/img/Logo TVRI.png">
                                <span class="brand-name">SISACARA</span>
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-5">
                        <h4 class="text-dark mb-5">Log In</h4>
                        <?php echo $this->session->flashdata('pesan') ?>
                        <form class="user" method="POST" action="<?php echo base_url('login') ?>">
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <?php echo form_error('username', '<div class="text-small text-danger"> </div>') ?>
                                    <input type="text" class="form-control input-lg" name="username" placeholder="Username">
                                </div>

                                <div class="form-group col-md-12 ">
                                    <?php echo form_error('password', '<div class="text-small text-danger"> </div>') ?>
                                    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                                </div>

                                <div class="col-md-12">
                                    <div class="d-flex my-2 justify-content-between">
                                        <div class="d-inline-block mr-3">
                                            <label class="control control-checkbox">Remember me
                                                <input type="checkbox" />
                                                <div class="control-indicator"></div>
                                            </label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary btn-block mb-4" value="Login">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sleek.js"></script>
    <link href="<?php echo base_url(); ?>assets/options/optionswitch.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/options/optionswitcher.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>