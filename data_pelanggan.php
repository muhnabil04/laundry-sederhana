<?php
include 'header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pelanggan</h1>


    <div class="row">

        <!-- Form -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pelanggan</h6>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_pelanggan.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" name="nama" id="name" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Enter address">
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis kelamin:</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon:</label>
                            <input type="text" class="form-control" name="tlp" placeholder="Masukkan Telepon">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>



        <!-- DataTales Example -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5px">ID</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>telp</th>
                                    <th width="6px">aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include "koneksi.php";
                                $sql = mysqli_query($koneksi, "select * from tb_member");
                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $data['id'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['alamat'] ?></td>
                                        <td><?= $data['jenis_kelamin'] ?></td>
                                        <td><?= $data['tlp'] ?></td>
                                        <td><a href="hapus_pelanggan.php?id=<?= $data['id'] ?>"><i class="fa fa-trash"></i></a> <a href="edit_pelanggan.php?id=<?= $data['id'] ?>"><i class="fa fa-edit"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
include 'footer.php';
?>