<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

    <!-- Heading -->
    <nav class="navbar navbar-dark bg-dark">

        <div class="container">
            <span class="navbar-brand mb-0 h1">Inventory App</span>
        </div>

    </nav>

    <!-- Main Home -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Ubah Data Barang</h3>
                <div class="card">
                    <div class="card-header">
                        Ubah Data
                    </div>
                    <div class="card-body">

                    <form action="" method="POST">
                            <input type="hidden" value="<?= $data_barang['id']; ?>" name="id">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" class="form-control" name="nama_barang" value="<?= $data_barang['nama_barang']; ?>">
                                <?= form_error('nama_barang', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nisn">Jenis Barang</label>
                                <input type="text" class="form-control" name="jenis_barang" value="<?= $data_barang['jenis_barang']; ?>">
                                <?= form_error('jenis_barang', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="text" class="form-control" name="stock" value="<?= $data_barang['stock']; ?>">
                                <?= form_error('stock', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-dark" name="UbahDataBarang">Ubah</button>
                            <a href="<?= base_url('c_data_barang'); ?>" class="btn btn-warning">Kembali</a>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>