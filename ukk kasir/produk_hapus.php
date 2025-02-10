<?php
$id = $_GET['id'];
$query = mysqli_quer($koneksi, "DELETE FROM produk WHERE id_produk=$id");
if($query) {
    echo '<script>alert("hapus data berhasil"); location.href="?page=produk"</scripct>';
}else{
    echo '<script>alert("hapus data gagal")</scripct>';
}
?>