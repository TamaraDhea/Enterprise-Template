<?php echo form_open('komentar/edit');?> 
<?php echo form_hidden('id_komentar',$dataKomentar[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataKomentar[0]->id,"disabled");?></td></tr> 
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang',$dataKomentar[0]->nama_barang);?></td></tr> 
	<tr><td>KOMENTAR</td><td><?php echo form_input('komentar',$dataKomentar[0]->komentar);?></td></tr>
	<tr><td>NAMA LENGKAP</td><td><?php echo form_input('nama_lengkap',$dataKomentar[0]->nama_lengkap);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
