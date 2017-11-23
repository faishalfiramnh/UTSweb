<?php echo form_open_multipart('Bengkel/createBeng');?>
<table>
    <tr><td>NAMA</td><td><?php echo form_input('nama_motor');?></td></tr>
    <tr><td>jenis kerusakan</td><td><?php echo form_input('jenis_kerusakan');?></td></tr> 
    <tr><td>harga</td><td><?php echo form_input('harga');?></td></tr>      
    <tr><td>jenis motor</td><td><?php echo form_input('jenis_motor');?></td></tr>             
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Bengkel','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>