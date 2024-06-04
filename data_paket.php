<?php
include 'header.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Paket</h1>


    <div class="row">

        <!-- Form -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Paket</h6>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_paket.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="gender">Outlet :</label>
                                <select name="id_outlet" class="form-control">
                                    <?php
                                    include 'koneksi.php';
                                    $sql = mysqli_query($koneksi, "select * from tb_outlet");
                                    while ($data = mysqli_fetch_array($sql)) {
                                    ?>
                                        <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>

                                    <?php

                                    }
                                    ?>
                                </select>
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis:</label>
                            <select name="jenis" class="form-control">
                                <option value="kiloan">kiloan</option>
                                <option value="kaos">Kaos</option>
                                <option value="bed_cover">Bed Cover</option>
                                <option value="selimut">selimut</option>
                                <option value="Lain">Lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Nama Paket:</label>
                            <input type="text" class="form-control" name="nama_paket" placeholder="Masukan Nama Paket">
                        </div>
                        <div class="form-group">
                            <label for="phone">Harga:</label>
                            <input type="text" class="form-control" name="harga" placeholder="Masukkan Harga">
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Paket</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5px">ID</th>
                                    <th>Outlet</th>
                                    <th>jenis</th>
                                    <th>Nama Paket</th>
                                    <th>Harga</th>
                                    <th width="6px">aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include "koneksi.php";
                                $sql = mysqli_query($koneksi, "SELECT tb_paket.*, tb_outlet.nama FROM tb_paket JOIN tb_outlet ON tb_paket.id_outlet = tb_outlet.id");

                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $data['id'] ?></td>
                                        <td><?= $data['nama'] ?></td>
                                        <td><?= $data['jenis'] ?></td>
                                        <td><?= $data['nama_paket'] ?></td>
                                        <td><?= $data['harga'] ?></td>
                                        <td><a href="hapus_paket.php?id=<?= $data['id'] ?>"><i class="fa fa-trash"></i></a> <a href="edit_paket.php?id=<?= $data['id'] ?>"><i class="fa fa-edit"></i></a></td>
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