<?php echo form_open('Peminjaman/editPeminjaman');?>
<?php echo form_hidden('id_peminjaman',$datapeminjaman[0]->id_peminjaman);?>

<table>
    <tr><td>ID peminjaman</td><td><?php echo form_input('id_peminjaman',$datapeminjaman[0]->id_peminjaman,"disabled");?></td></tr>
    <tr><td>id peminjam</td><td><?php echo form_input('id_peminjam',$datapeminjaman[0]->id_peminjam);?></td></tr>
    <tr><td>tanggal pinjam</td><td><?php echo form_input('tanggal_pinjam',$datapeminjaman[0]->tanggal_pinjam);?></td></tr>
    <tr><td>tanggal kembali</td><td><?php echo form_input('tanggal_kembali',$datapeminjaman[0]->tanggal_kembali);?></td></tr>
     <tr><td>id buku</td><td><?php echo form_input('id_buku',$datapeminjaman[0]->id_buku);?></td></tr>
 
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Peminjaman','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
