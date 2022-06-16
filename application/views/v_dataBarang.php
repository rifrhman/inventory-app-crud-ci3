<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

    <!-- Heading -->
    <nav class="navbar navbar-dark bg-dark">

        <div class="container">
            <span class="navbar-brand mb-0 h1">Inventory App</span>
            <span><a href="<?= base_url('c_login_user/logout/'); ?>" class="btn btn-danger">Logout</a></span>
        </div>

    </nav>

    <!-- Main Home -->
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Data Barang</h3>
                <a href="<?= base_url('c_data_barang/tambahBarang/'); ?>" class="btn btn-primary mb-2">
                    Tambah Data
                </a>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead class="text-center">
                            <?php $no = 1; ?>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>Stock</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data_barang as $inv): ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></td>
                                    <td><?= $inv['nama_barang']; ?></td>
                                    <td><?= $inv['jenis_barang']; ?></td>
                                    <td><?= $inv['stock']; ?></td>
                                    <td>
                                        <a href="<?= base_url('c_data_barang/ubahDataBarang/'); ?><?= $inv['id']; ?>" class="btn btn-success">Edit</a>
                                        <td><a href="<?= base_url('c_data_barang/hapusDataBarang/'); ?><?= $inv['id']; ?>" 
                                        class="btn btn-danger" 
                                        onclick="return confirm('Hapus Data Barang ?');">Hapus</a></td>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>