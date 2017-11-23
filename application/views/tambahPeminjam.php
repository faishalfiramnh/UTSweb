<?php echo form_open_multipart('Peminjam/createPeminjam');?>
<table>
    <tr><td>id peminjam</td><td><?php echo form_input('id_peminjam');?></td></tr>
    <tr><td>nama</td><td><?php echo form_input('nama');?></td></tr> 
    <tr><td>alamat</td><td><?php echo form_input('alamat');?></td></tr>    
    <tr><td>telfon</td><td><?php echo form_input('telpon');?></td></tr>      
      
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Peminjam','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>