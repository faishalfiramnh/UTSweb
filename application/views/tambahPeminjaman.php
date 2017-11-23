<?php echo form_open_multipart('Peminjaman/createPeminjaman');?>
<table>
    <tr><td>id peminjaman</td><td><?php echo form_input('id_peminjaman');?></td></tr>
    <tr><td>id peminjam</td><td><?php echo form_input('id_peminjam');?></td></tr> 
    <tr><td>tanggal pinjam</td><td><?php echo form_input('tanggal_pinjam');?></td></tr>    
    <tr><td>tangal kembali</td><td><?php echo form_input('tanggal_kembali');?></td></tr>      
    <tr><td>id buku</td><td><?php echo form_input('id_buku');?></td></tr>      
      
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Peminjaman','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>