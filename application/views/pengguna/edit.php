<?php echo form_open('pengguna/edit');?> 
<?php echo form_hidden('id_pengguna',$dataPengguna[0]->id);?>

<table>
	<tr><td>ID</td><td><?php echo form_input('',$dataPengguna[0]->id,"disabled");?></td></tr> 
	<tr><td>USERNAME</td><td><?php echo form_input('nama_lengkap',$dataPengguna[0]->nama_lengkap);?></td></tr> 
	<tr><td>PASSWORD</td><td><?php echo form_input('username',$dataPengguna[0]->username);?></td></tr>
	<tr><td>EMAIL</td><td><?php echo form_input('password',$dataPengguna[0]->password);?></td></tr> 
	<tr><td>ALAMAT</td><td><?php echo form_input('alamat',$dataPengguna[0]->alamat);?></td></tr> 
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php 
echo form_close(); 
 ?>
