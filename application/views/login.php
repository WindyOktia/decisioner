<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no,user-scalable=no" />
    <title>Decisioner</title>
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
        <form action="<?=base_url('login/do_login')?>" method="post">
            <h2 style="text-align:center">Login</h2>
            <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" required type="text" name="access_code" placeholder="Kode akses Anda" autocomplete='off'/></div>
            <!-- <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" /></div> -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
              <!-- <a href="<?= base_url('responden')?>" class="btn btn-primary btn-block">Responden</a> -->
            
            </form>
            <h4 style="text-align:center;padding-top:25px">- Panduan Pengguna -</h4>
            <a href="" class="btn btn-secondary btn-block">Responden Saham</a>
            <a href="" class="btn btn-secondary btn-block">Responden Bank</a>
            
    </div>
    
</body>

</html>