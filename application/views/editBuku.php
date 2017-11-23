
<?php echo form_open('Buku/edit');?>
<?php echo form_hidden('id_buku',$databuku[0]->id_buku);?>

<table>
    <tr><td>ID Buku</td><td><?php echo form_input('id_buku',$databuku[0]->id_buku,"disabled");?></td></tr>
    <tr><td>judul</td><td><?php echo form_input('judul',$databuku[0]->judul);?></td></tr>
    <tr><td>pengarang</td><td><?php echo form_input('pengarang',$databuku[0]->pengarang);?></td></tr>
     <tr><td>tahun terbit</td><td><?php echo form_input('tahun_terbit',$databuku[0]->tahun_terbit);?></td></tr>
 
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Buku','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>

