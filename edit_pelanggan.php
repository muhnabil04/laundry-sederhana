<?php
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Pelanggan</h6>
            </div>
            <div class="card-body">
                <form action="proses_edit_pelanggan.php" method="post" enctype="multipart/form-data">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi, "select * from tb_member where id='$id'");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <input type="text" value="<?= $id ?>" hidden name="id">
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" name="nama" id="name" placeholder="Enter name" value="<?= $data['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat:</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Enter address" value="<?= $data['alamat'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="gender">Jenis kelamin:</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option <?php if ($data['jenis_kelamin'] == "L") {
                                            echo "selected";
                                        } ?> value="L">Laki-laki</option>
                                <option <?php if ($data['jenis_kelamin'] == "P") {
                                            echo "selected";
                                        } ?> value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telepon:</label>
                            <input type="text" class="form-control" name="tlp" placeholder="Masukkan Telepon" value="<?= $data['tlp'] ?>">
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