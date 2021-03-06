<div class="container">
    <div class="row">
        <div class ="col-xs-12">

            <div class="alert alert-success">
               <center> <strong>Selamat Datang di SIP Perumahan PT. Aulia</strong></center>
			   <p align="center">
                              Jalan Diponegoro No.4, Kisaran Kota, Kec. Kota Kisaran Barat<br>
                              Kabupaten Asahan, Sumatera Utara, Kode Pos : 21216
                            <br>Telp  : (021) 29278888<br></p>

            </div>
        </div>
    </div>
    <div class="row">
	
        <!--colomn kedua-->
        <div class="col-sm-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Berkas Pelanggan</h3>
                </div>
                <div class="panel-body">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
					 <center>
                        <thead>
                            <tr>
                                <th>No.</th><th width="10%">No. Rumah</th><th>Alamat</th><th>Nama Pembeli</th><th>No Telepon</th><th>Tanggal Masuk</th><th>Keterangan</th>
                            </tr>
                        </thead>
						
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM perumahan";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['no_rumah'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['nama_pembeli'] ?></td>
									<td><?= $data['no_telp'] ?></td>
									<td><?= $data['tgl_masuk'] ?></td>
                                    <td><?= $data['keterangan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
						

                    </table>
					</center>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->

</div>
