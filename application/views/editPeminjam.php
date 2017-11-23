<?php echo form_open('Peminjam/editPeminjam');?>
<?php echo form_hidden('id_peminjam',$datapeminjam[0]->id_peminjam);?>

<table>
    <tr><td>ID peminjam</td><td><?php echo form_input('id_peminjam',$datapeminjam[0]->id_peminjam,"disabled");?></td></tr>
    <tr><td>nama</td><td><?php echo form_input('nama',$datapeminjam[0]->nama);?></td></tr>
    <tr><td>alamat</td><td><?php echo form_input('alamat',$datapeminjam[0]->alamat);?></td></tr>
     <tr><td>tefpon</td><td><?php echo form_input('telpon',$datapeminjam[0]->telpon);?></td></tr>
 
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Peminjam','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
