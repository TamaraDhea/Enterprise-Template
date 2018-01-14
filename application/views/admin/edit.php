
<?php echo form_open('admin/edit');?> 
<?php echo form_hidden('id_admin',$dataAdmin[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataAdmin[0]->id,"disabled");?></td></tr> 
	<tr><td>USERNAME</td><td><?php echo form_input('username',$dataAdmin[0]->username);?></td></tr> 
	<tr><td>PASSWORD</td><td><?php echo form_input('password',$dataAdmin[0]->password);?></td></tr>
	<tr><td>EMAIL</td><td><?php echo form_input('email',$dataAdmin[0]->email);?></td></tr> 
	<tr><td>ALAMAT</td><td><?php echo form_input('alamat',$dataAdmin[0]->alamat);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
