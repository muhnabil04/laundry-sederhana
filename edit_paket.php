<?php
include 'header.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Paket</h6>
            </div>
            <div class="card-body">
                <form action="proses_edit_paket.php" method="post" enctype="multipart/form-data">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $sql = mysqli_query($koneksi, "select tb_paket.*,tb_outlet.nama,tb_outlet.id as id_outlet from tb_paket,tb_outlet  where tb_paket.id_outlet=tb_outlet.id and tb_paket.id = '$id'");
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
                            <label for="gender">Jenis:</label>
                            <select name="jenis" class="form-control">
                                <option <?php if ($data['jenis'] == "kiloan") {
                                            echo "selected";
                                        } ?> value="kiloan">kiloan</option>
                                <option <?php if ($data['jenis'] == "kaos") {
                                            echo "selected";
                                        } ?> value="kaos">Kaos</option>
                                <option <?php if ($data['jenis'] == "bed_cover") {
                                            echo "selected";
                                        } ?> value="bed_cover">Bed Cover</option>
                                <option <?php if ($data['jenis'] == "selimut") {
                                            echo "selected";
                                        } ?> value="selimut">selimut</option>
                                <option <?php if ($data['jenis'] == "lain") {
                                            echo "selected";
                                        } ?> value="lain">Lain</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address">Nama Paket:</label>
                            <input type="text" class="form-control" name="nama_paket" placeholder="Masukan Nama Paket" value="<?= $data['nama_paket'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone">Harga Paket:</label>
                            <input type="number" class="form-control" name="harga" placeholder="Masukkan harga" value="<?= $data['harga'] ?>">
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