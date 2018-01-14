
<?php $this->load->view('header'); ?>

<?php echo form_open_multipart('kategori/create');?> 
<table>
	<tr><td>ID</td><td><?php echo form_input('id_kategori');?></td></tr> 
	<tr><td>NAMA</td><td><?php echo form_input('nama_kategori');?></td></tr> 
	<tr><td>KETERANGAN</td><td><?php echo form_input('keterangan');?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?>
	</td></tr>
</table>

<?php 
echo form_close(); 
 ?>
