<?php $this->load->view('header'); ?>
<?php echo form_open_multipart('barang/create');?> 
<table>
	<tr><td>ID</td><td><?php echo form_input('id_barang');?></td></tr> 
	<tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang');?></td></tr> 
	<tr><td>FK KATEGORI</td><td><?php echo form_input('fk_kategori');?></td></tr> 
	<tr><td>OPEN BID</td><td><?php echo form_input('open_bid');?></td></tr> 
	<tr><td>DESKRIPSI</td><td><?php echo form_input('deskripsi');?></td></tr>
	<tr><td colspan="2">
		<?php echo form_submit('submit','Simpan');?> 
		<?php echo anchor('admin','Kembali');?>
	</td></tr>
</table>

<?php 
echo form_close(); 
 ?>
