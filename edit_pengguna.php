<?php
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Pengguna</h6>
            </div>
            <div class="card-body">
                <form action="proses_edit_pengguna.php" method="post" enctype="multipart/form-data">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi, "select tb_user.*,tb_outlet.id as id_outlet from tb_user,tb_outlet  where tb_user.id_outlet=tb_outlet.id and tb_user.id = '$id'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <input type="text" value="<?= $id ?>" hidden name="id">
                        <div class="form-group">
                            <label for="outlet">Outlet :</label>
                            <select name="id_outlet" class="form-control">
                                <?php
                                include 'koneksi.php';
                                $sql = mysqli_query($koneksi, "SELECT * FROM tb_outlet");

                                while ($data2 = mysqli_fetch_array($sql)) {
                                ?>
                                    <option <?php if ($data['id_outlet'] == $data2['id']) {
                                                echo "selected";
                                            } ?> value="<?= $data2['id'] ?>"><?= $data2['nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="gender">Role:</label>
                            <select name="role" class="form-control">
                                <option <?php if ($data['role'] == "owner") {
                                            echo "selected";
                                        } ?> value="owner">Owner</option>
                                <option <?php if ($data['role'] == "admin") {
                                            echo "selected";
                                        } ?> value="admin">Admin</option>
                                <option <?php if ($data['role'] == "kasir") {
                                            echo "selected";
                                        } ?> value="kasir">Kasie</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Nama:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama " value="<?= $data['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Masukkan username" value="<?= $data['username'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Password:</label>
                            <input type="text" class="form-control" name="password" placeholder="Masukkan usernmae" value="<?= $data['password'] ?>">
                        </div>
                    <?php
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- End of Main Content -->

    <?php
    include 'footer.php';
    ?>