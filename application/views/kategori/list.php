<?php $this->load->view('header'); ?>
<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA</th>
		<th>KETERANGAN</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataKategori as $kategori){
		echo "<tr>
			<td>$kategori->id_kategori</td> 
			<td>$kategori->nama_kategori</td> 
			<td>$kategori->keterangan</td> 
			<td>".anchor('kategori/edit/'.$kategori->id_kategori, 'Edit')." 
			".anchor('kategori/delete/'.$kategori->id_kategori, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/kategori/create">+ Tambah data </a>
