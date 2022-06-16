<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

    <!-- Heading -->
    <nav class="navbar navbar-dark bg-dark">

        <div class="container">
            <span class="navbar-brand mb-0 h1">Inventory App - Login</span>
        </div>

    </nav>

    <form action="<?= base_url('c_login_user/loginUser'); ?>" method="POST">

    <div class="col-md-4 col-md-offset-4" style="margin-top:10%">
        <h3 class="text-center">Halaman Login</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row form-group">
                    <label for="email" class="col-md-3">Email</label>
                    <div class="col-md-9">
                        <input type="text" name="email" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="password" class="col-md-3">Password</label>
                    <div class="col-md-9">
                        <input type="password" name="password" class="form-control input-sm" required>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="" class="col-md-3"></label>
                    <div class="col-md-9">
                        <button type="submit" class="btn btn-primary btn-sm">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            if($this->session->flashdata('msg')){
                ?>

                <div class="alert alert-dismissible alert-danger">
                    <?= $this->session->flashdata('msg'); ?>
                </div>

                <?php
            }
        ?>
    </div>

    </form>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>