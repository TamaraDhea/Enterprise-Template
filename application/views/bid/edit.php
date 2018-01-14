<?php echo form_open('bid/edit');?> 
<?php echo form_hidden('id_bid',$dataBid[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataBid[0]->id,"disabled");?></td></tr> 
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang',$dataBid[0]->nama_barang);?></td></tr> 
	<tr><td>UP BID</td><td><?php echo form_input('up_bid',$dataBid[0]->up_bid);?></td></tr>
	<tr><td>NAMA LENGKAP</td><td><?php echo form_input('nama_lengkap',$dataBid[0]->nama_lengkap);?></td></tr> 
	<tr><td>TANGGAL</td><td><?php echo form_input('tanggal',$dataBid[0]->tanggal);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
