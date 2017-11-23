<?php echo form_open_multipart('Buku/createbuku');?>
<table>
    <tr><td>id buku</td><td><?php echo form_input('id_buku');?></td></tr>
    <tr><td>judul</td><td><?php echo form_input('judul');?></td></tr> 
    <tr><td>pengarang</td><td><?php echo form_input('pengarang');?></td></tr>    
    <tr><td>tahun terbit</td><td><?php echo form_input('tahun_terbit');?></td></tr>      
      
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Buku','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>