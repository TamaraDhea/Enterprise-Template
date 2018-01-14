<?php $this->load->view('header'); ?>
<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>NAMA BARANG</th>
		<th>UP BID</th>
		<th>NAMA LENGKAP</th>
		<th>TANGGAL</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataBid as $bid){
		echo "<tr>
			<td>$bid->id_bid</td>
			<td>$bid->nama_barang</td>  
			<td>$bid->up_bid</td> 
			<td>$bid->nama_lengkap</td> 
			<td>$bid->tanggal</td>
			<td>".anchor('bid/edit/'.$bid->id_bid, 'Edit')." 
			".anchor('bid/delete/'.$bid->id_bid, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/bid/create">+ Tambah data </a>
