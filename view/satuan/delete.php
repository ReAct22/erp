<?php
$kode_satuan = @$_GET['id'];
DeleteSatuan($kode_satuan);
?>
<script>
    alert("Data Berhasil Di hapus");
    window.location.href="?page=satuan";
</script>