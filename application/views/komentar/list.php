<?php $this->load->view('header'); ?>
<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA BARANG</th>
		<th>KOMENTAR</th>
		<th>NAMA LENGKAP</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataKomentar as $komentar){
		echo "<tr>
			<td>$komentar->id_komentar</td> 
			<td>$komentar->nama_barang</td> 
			<td>$komentar->komentar</td> 
			<td>$komentar->nama_lengkap</td>
			<td>".anchor('komentar/edit/'.$komentar->id_komentar, 'Edit')." 
			".anchor('komentar/delete/'.$komentar->id_komentar, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/komentar/create">+ Tambah data </a>
