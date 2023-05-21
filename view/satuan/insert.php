<?php $kode = GetNewKodeSatuan(); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">New Satuan</h1>
    <a href="?page=new_satuan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-folder fa-sm text-white-50"></i> New</a>
</div>
<div class="card-body">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-6 col-xl-6 col-6 p-2">
                <input type="text" class="form-control" placeholder="Kode Satuan" name="kode" value="<?php echo $kode; ?>">
            </div>
            <div class="col-sm-6 col-xl-6 col-6 p-2">
                <input type="text" class="form-control" placeholder="Nama Satuan" name="nama">
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-12 col-xl-12 col-12 p-2">
                <div class="align-self-end">
                    <input type="submit" value="Save" class="btn btn-sm btn-success" name="save">
                </div>

            </div>
        </div>
    </form>
    <?php
    $kode = @$_POST['kode'];
    $nama = @$_POST['nama'];
    $save = @$_POST['save'];
    if ($save) {
        if ($kode == "" || $nama == "") {
    ?>
            <script>
                alert("Data Tidak ditemukan");
            </script>
        <?php
        } else {
            InsertDataSatuan($kode, $nama)
        ?>
            <script>
                alert("Data Berhasil tersimpan");
                window.location.href = "?page=satuan";
            </script>
    <?php
        }
    }
    ?>
</div>