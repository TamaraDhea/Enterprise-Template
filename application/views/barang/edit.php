<?php echo form_open('barang/edit');?> 
<?php echo form_hidden('id_barang',$dataBarang[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataBarang[0]->id,"disabled");?></td></tr> 
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang',$dataBarang[0]->nama_barang);?></td></tr> 
	<tr><td>NAMA KATEGORI</td><td><?php echo form_input('nama_kategori',$dataBarang[0]->nama_kategori);?></td></tr>
	<tr><td>OPEN BID</td><td><?php echo form_input('open_bid',$dataBarang[0]->open_bid);?></td></tr> 
	<tr><td>DESKRIPSI</td><td><?php echo form_input('deskripsi',$dataBarang[0]->deskripsi);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
