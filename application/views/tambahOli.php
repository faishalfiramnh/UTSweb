<?php echo form_open_multipart('Oli/create');?>
<table>
    <tr><td>NAMA OLI</td><td><?php echo form_input('nama_oli');?></td></tr>
    <tr><td>kekentalan</td><td><?php echo form_input('kekentalan');?></td></tr> 
    <tr><td>satuan liter</td><td><?php echo form_input('satuan_liter');?></td></tr>      
      
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Bengkel','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>