<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">New Product</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-folder fa-sm text-white-50"></i> New</a>
</div>
<div class="card-body">
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-6 col-xl-6 col-6 p-2">
                <input type="text" class="form-control" placeholder="Kode Barang" name="kode" value="">
            </div>
            <div class="col-sm-6 col-xl-6 col-6 p-2">
                <input type="text" class="form-control" placeholder="Nama Barang" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 col-xl-3 col-3 p-2">
                <input type="text" class="form-control" placeholder="Harga Barang" name="kode" value="">
            </div>
            <div class="col-sm-3 col-xl-3 col-3 p-2">
                <input type="text" class="form-control" placeholder="pajak" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xl-4 col-4 p-2">
                <input type="text" class="form-control" placeholder="Harga Barang" name="kode" value="">
            </div>
            <div class="col-sm-4 col-xl-4 col-4 p-2">
                <input type="text" class="form-control" placeholder="pajak" name="nama">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xl-4 col-4 p-2">
                <select name="" class="form-control" id="">
                    <option value="">Category</option>
                </select>
            </div>
            <div class="col-sm-4 col-xl-4 col-4 p-2">
                <select name="" class="form-control" id="">
                    <option value="">Satuan</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xl-4 col-4 p-2">
                <input type="text" class="form-control" placeholder="Barcode" name="kode" value="">
            </div>
            <div class="col-sm-4 col-xl-4 col-4 p-2">
                <input type="text" class="form-control" data-provide="datepicker" value="<?php echo date('Y/m/d') ?>" name="nama">
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
</div>

