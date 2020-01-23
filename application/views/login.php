<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>BosaApp</title>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" />
    <link rel="stylesheet" href="Footer-Dark.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Login-Form-Clean.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Material-Card.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/Navigation-Clean.css" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/styles.css" />
    <link rel="stylesheet" href="Table-with-search-1.css" />
    <link rel="stylesheet" href="Table-with-search.css" />
</head>

<body>
    <div class="login-clean">
        <form method="post">
            <h2 style="text-align:center">Login</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
            <div class="form-group">
              <a href="<?= base_url('admin')?>" class="btn btn-primary btn-block">Admin</a>
              <a href="<?= base_url('responden')?>" class="btn btn-primary btn-block">Responden</a>
            
            </form>
            
    </div>
</body>

</html>