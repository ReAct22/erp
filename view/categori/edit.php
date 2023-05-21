<?php 
$conn = Koneksi();
$id_category = @$_GET['id'];
$sql = mysqli_query($conn, "SELECT *FROM tblmst_category where kode = '".$id_category."'");
$data = mysqli_fetch_array($sql);
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Update Product</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-folder fa-sm text-white-50"></i> New</a>
</div>
<div class="card-body">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-6 col-xl-6 col-6 p-2">
                <input type="text" class="form-control" placeholder="Kode Kategori" name="kode" value="<?php echo $data['kode'] ?>">
            </div>
            <div class="col-sm-6 col-xl-6 col-6 p-2">
                <input type="text" class="form-control" placeholder="Nama Kategori" name="nama" value="<?php echo $data['nama'] ?>">
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-12 col-xl-12 col-12 p-2">
                <div class="align-self-end">
                    <input type="submit" value="Update" class="btn btn-sm btn-success" name="update">
                </div>

            </div>
        </div>
    </form>
    <?php
    $kode = @$_POST['kode'];
    $nama = @$_POST['nama'];
    $update = @$_POST['update'];
    if($update){
        UpdateDataCategory($kode, $nama);
        ?>
        <script>
            alert("Update Data Berhasil")
            window.location.href="?page=category";
        </script>
        <?php
    }

    
    ?>
</div>