<div id="content">
<div id="beranda-judul-data">
		<h1>Data Buku Perpustakaan</h1>
	</div>
	<table id="tabel-tampil"> <br><br>
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
            <th>Penerbit</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		
		
		<?php
		$sql="SELECT * FROM tbbuku ORDER BY idbuku ASC";
		$q_tampil_buku = mysqli_query($db, $sql);
		
		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
            <td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>

            <div class="tombol-opsi-container"><a href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a>&emsp;</div>
            <div class="tombol-opsi-container"><a href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol">Hapus</a></div>
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Daftar Buku</a></p>
	<a href="#cetak" target="_blank">CETAK</a></p>
</div>