<?php $this->load->view('header'); ?>
<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA LENGKAP</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>ALAMAT</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataPengguna as $pengguna){
		echo "<tr>
			<td>$pengguna->id_pengguna</td> 
			<td>$pengguna->nama_lengkap</td> 
			<td>$pengguna->username</td> 
			<td>$pengguna->password</td>
			<td>$pengguna->alamat</td>
			<td>".anchor('pengguna/edit/'.$pengguna->id_pengguna, 'Edit')." 
			".anchor('pengguna/delete/'.$pengguna->id_pengguna, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/pengguna/create">+ Tambah data </a>
