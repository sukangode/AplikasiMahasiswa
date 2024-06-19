<?php
include 'tampilkan_data.php';

$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>


<<html>
    <header>
        <title>
        </title>

        <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </header>

    <body>

        <div class="span9" id="content">
            <!-- morris stacked chart -->
            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Input Nama Mahasiswa</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <form class="form-horizontal">
                                <fieldset>
                                    <legend>Input Nama Mahasiswa</legend>
                                    <div class="control-group">
                                        <label class="control-label" for="NAMA">NAMA MAHASISWA</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NAMA" name="nama" value="">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="NPM">NPM MAHASISWA</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="NPM" name="npm" value="">
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="KELAS">KELAS MAHASISWA</label>
                                        <div class="controls">
                                            <input type="text" class="input-xlarge focused" id="KELAS" name="kelas" value="">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-primary">OKE</button>
                                        <button type="reset" class="btn">CANCEL</button>
                                    </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <!-- block -->
                <div class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left">Kehadiran Mahasiswa</div>
                    </div>
                    <div class="block-content collapse in">
                        <div class="span12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Mahasiswa</th>
                                        <th>NPM Mahasiswa</th>
                                        <th>PRODI</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($data = mysqli_fetch_assoc($proses)) {
                                    ?>

                                        <tr>
                                            <td><?php echo $data['npm']; ?></td>
                                            <td><?php echo $data['nama_mahasiswa']; ?></td>
                                            <td><?php echo $data['kelas_mahasiswa']; ?></td>
                                            <td><a href="edit.php?id=<?php echo $data['id']; ?>">OKE</a>
                                                | <a href="hapus.php?id=<?php echo $data['id']; ?>">CANCEL</a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /block -->
            </div>



        </div>
    </body>

    </html>