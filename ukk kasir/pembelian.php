<div class="container-fluid">
                        <h1 class="mt-4">Pembelian</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                        <hr>
                        <a href="?page=pembelian_tambah" clas="btn btn-primary">+ Tambah pembelian</a>
                        <table class="table table-border">
                            <tr>
                                <th>Tanggal Pembelian</th>
                                <th>Pelanggan</th>
                                <th>Total Harga</th>
                                <th>Aksi</th>
                            </tr>

                            <?php
                            $query = mysqli_query($koneksi, "SELECT*FROM penjualan LEFT JOIN pelanggan on pelanggan.id_pelanggan = penjualan.id_pelanggan");
                            while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $data['tanggal_penjualan']; ?></td>
                                    <td><?php echo $data['nama_pelanggan']; ?></td>
                                    <td><?php echo $data ['total_harga'];?></td>
                                    <td>
                                        <a href="?page=produk_ubah&&id=<?php echo $data
                                        ['id_penjualan']; ?>" class="btn btn-secondary">Detail</a>
                                        <a href="?page=produk_hapus&&id=<?php echo $data['id_produk']; ?>" class="btn btn-secondary">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                            }

                        ?>
                            
                        </table>
                       

                       
                        </div>