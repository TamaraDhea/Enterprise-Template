<?php $this->load->view('header'); ?>
<font color="orange"> 
<?php echo $this->session->flashdata('hasil'); ?>
</font> 
<table border="1">
	<tr>
		<th>ID</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>EMAIL</th>
		<th>ALAMAT</th>
		<th></th>
	</tr> 
	<?php 
	foreach ($dataAdmin as $admin){
		echo "<tr>
			<td>$admin->id_admin</td> 
			<td>$admin->username</td> 
			<td>$admin->password</td> 
			<td>$admin->email</td>
			<td>$admin->alamat</td>
			<td>".anchor('admin/edit/'.$admin->id_admin, 'Edit')." 
			".anchor('admin/delete/'.$admin->id_admin, 'Delete')."
			</td>
			</tr>";
	}
	?>
	</table> 
	<a href="http://localhost/lelangbang/lelang_client/index.php/admin/create">+ Tambah data </a>
