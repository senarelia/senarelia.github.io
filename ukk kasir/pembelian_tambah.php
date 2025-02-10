<?php 
    if(isset($_POST['nama_produk'])) {
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $query = mysqli_query($koneksi, "INSERT INTO produk(nama_produk,harga,stok) values('$nama', '$harga', '$stok')");
        if($query) {
            echo '<script>alert("tambah data berhasil")</scripct>';
        }else{
            echo '<script>alert("tambah data gagal")</scripct>';
        }
    }
?>

<div class="container-fluid">
                        <h1 class="mt-4">Pembelian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Pembelian</li>
                        </ol>
                        <a href="?page=produk" clas="btn btn-danger">+ Kembali</a>
                       <hr>

                       <form method="post">
                        <table class="table table-bordered">
                            <tr>
                                <td width="200">Nama Pelanggan</td>
                                <td width="1">:</td>
                                <td>

                                <select class="form-control form-select" name="id_pelanggan">
                                    <?php 
                                    $p = mysqli_query($koneksi, "SELECT*FROM pelanggan");
                                    while($pel = mysqli_fetch_array($p)) {
                                    ?>
                                    <option value="<?php echo $pel['id_pelanggan']; ?>"><?php echo $pel['nama_pelanggan']; ?>></option>
                                    <?php
                                }
                            ?>
                                </select>
                                </td>
                            </tr>
                            <?php 
                            $pro = mysqli_query($koneksi, "SELECT*FROM produk");
                            while($produk = mysqli_fetch_array($pro)) {
                            ?>
                            <tr>
                                <td><?php echo $produk['nama_produk'] . ' (stok : ' . $produk['stok'] . ')';?> </td>
                                <td>:</td>
                                <td>
                                    <input class="form-control" type="number"
                                 step="0" value="0" max="<?php echo $produk['stok']; ?>" name="produk[<?php echo $produk['id_produk']; ?>]"></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td></td>
                                <td:</td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </td>
                            </tr>
                        </table>
                       </form>
                        </div>