<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Satuan</h1>
    <a href="?page=new_satuan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-folder fa-sm text-white-50"></i> New</a>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $data = GetAllData(); ?>
                    <?php while ($row = mysqli_fetch_array($data)) { ?>
                        <tr>
                            <td><?php echo $row['kode'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td class="text-center">
                                <a href="?page=edit_satuan&id=<?php echo $row['kode'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="?page=delete_satuan&id=<?php echo $row['kode'] ?>" class="btn btn-sm btn-danger">Edit</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>