<?php $this->load->view('header'); ?>
<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA BARANG</th>
		<th>NAMA KATEGORI</th>
		<th>DESKRIPSI</th>
		<th>OPEN BID</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataBarang as $barang){
		echo "<tr>
			<td>$barang->id_barang</td> 
			<td>$barang->nama_barang</td>
			<td>$barang->nama_kategori</td> 
			<td>$barang->deskripsi</td>  
			<td>$barang->open_bid</td>
			<td>".anchor('barang/edit/'.$barang->id_barang, 'Edit')." 
			".anchor('barang/delete/'.$barang->id_barang, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/barang/create">+ Tambah data </a>
