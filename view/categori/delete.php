<?php
$kode_category = @$_GET['id'];
DeleteCategory($kode_category);
?>
<script>
    alert("Data Berhasil Di hapus");
    window.location.href="?page=category";
</script>