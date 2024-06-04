<?php
include 'header.php';
?>

<?php
// Asumsikan session_start() sudah dipanggil di awal skrip atau di bagian lain dari aplikasi

if ($_SESSION['role'] != "admin") {
    session_destroy();
    exit(); // Menghentikan eksekusi script setelah redirect
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pengguna</h1>


    <div class="row">

        <!-- Form -->
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Penguna</h6>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_pengguna.php" method="post" enctype="multipart/form-data">
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
                            <label for="gender">Role:</label>
                            <select name="role" class="form-control">
                                <option value="owner">Owner</option>
                                <option value="admin">Admin</option>
                                <option value="kasir">Kasir</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Nama:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="phone">Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                            <label for="phone">Password:</label>
                            <input type="text" class="form-control" name="password" placeholder="Masukkan Username">
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
                    <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5px">ID</th>
                                    <th>Outlet</th>
                                    <th>Role</th>

                                    <th>Username</th>
                                    <th>Password</th>
                                    <th width="6px">aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include "koneksi.php";
                                $sql = mysqli_query($koneksi, "SELECT tb_user.*,tb_outlet.nama as nama_outlet FROM tb_user,tb_outlet where tb_user.id_outlet = tb_outlet.id");

                                while ($data = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $data['id'] ?></td>
                                        <td><?= $data['nama_outlet'] ?></td>
                                        <td><?= $data['role'] ?></td>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['password'] ?></td>
                                        <td><a href="hapus_pengguna.php?id=<?= $data['id'] ?>"><i class="fa fa-trash"></i></a> <a href="edit_pengguna.php?id=<?= $data['id'] ?>"><i class="fa fa-edit"></i></a></td>
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