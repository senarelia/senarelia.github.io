<div class="container-fluid">
                        <h1 class="mt-4">Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <hr>
                        <a href="?page=produk_tambah" clas="btn btn-primary">+ Tambah Data</a>
                        <table class="table table-border">
                            <tr>
                                <th>NamaProduk</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Aksi</th>
                            </tr>

                            <?php
                            $query = mysqli_query($koneksi, "SELECT*FROM pelanggan");
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $data['nama_produk']; ?></td>
                                    <td><?php echo $data['harga']; ?></td>
                                    <td><?php echo $data ['stok'];?></td>
                                    <td>
                                        <a href="?page=produk_ubah&&id=<?php echo $data['id_produk']; ?>" class="btn btn-secondary">Ubah</a>
                                        <a href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?>" class="btn btn-secondary">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                            }

                        ?>
                            
                        </table>
                       

                       
                        </div>