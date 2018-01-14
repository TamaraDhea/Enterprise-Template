<?php $this->load->view('header'); ?>
<?php echo form_open_multipart('pengguna/create');?> 
<table>
	<tr><td>ID</td><td><?php echo form_input('id_pengguna');?></td></tr> 
	<tr><td>NAMA LENGKAP</td><td><?php echo form_input('nama_lengkap');?></td></tr> 
	<tr><td>USERNAME</td><td><?php echo form_input('username');?></td></tr> 
	<tr><td>PASSWORD</td><td><?php echo form_input('password');?></td></tr> 
	<tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('admin','Kembali');?>
	</td></tr>
</table>

<?php 
echo form_close(); 
 ?>
