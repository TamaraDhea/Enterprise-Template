<?php $this->load->view('header'); ?>
<?php echo form_open_multipart('komentar/create');?> 
<table>
	<tr><td>ID</td><td><?php echo form_input('id_komentar');?></td></tr> 
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang');?></td></tr> 
	<tr><td>KOMENTAR</td><td><?php echo form_input('komentar');?></td></tr> 
	<tr><td>NAMA LENGKAP</td><td><?php echo form_input('nama_lengkap');?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('admin','Kembali');?>
	</td></tr>
</table>

<?php 
echo form_close(); 
 ?>
