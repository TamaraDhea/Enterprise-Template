<?php echo form_open('kategori/edit');?> 
<?php echo form_hidden('id_kategori',$dataKategori[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataKategori[0]->id,"disabled");?></td></tr> 
	<tr><td>NAMA</td><td><?php echo form_input('nama_kategori',$dataKategori[0]->nama_kategori);?></td></tr> 
	<tr><td>KETERANGAN</td><td><?php echo form_input('keterangan',$dataKategori[0]->keterangan);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
