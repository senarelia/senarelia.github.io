<?php
$id = $_GET['id'];
$query = mysqli_quer($koneksi, "DELETE FROM pelanggan WHERE id_pelanggan=$id");
if($query) {
    echo '<script>alert("hapus data berhasil"); location.href="?page=pelanggan"</scripct>';
}else{
    echo '<script>alert("hapus data gagal")</scripct>';
}
?>