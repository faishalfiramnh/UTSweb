<font color="orange">
<?php echo $this->session->flashdata('hasilPeminjaman'); ?>
</font>
<table border="1">
    <tr><th>ID peminjaman</th>
    <th>id peminjam</th>
    <th>tanggal pinjam</th>
    <th>tanggal kembali</th>
    <th>id buku</th>
    <th></th></tr>
    <?php
    foreach ($datapeminjaman as $User)
    {
        echo "<tr>
              <td>$User->id_peminjaman</td>
              <td>$User->id_peminjam</td>
              <td>$User->tanggal_pinjam</td>
              <td>$User->tanggal_kembali</td>
              <td>$User->id_buku</td>
            
              <td>".anchor('Peminjaman/editPeminjaman/'.$User->id_peminjaman,'Edit')."
                  ".anchor('Peminjaman/delete/'.$User->id_peminjaman,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/UTSWeb/index.php/Peminjaman/createPeminjaman">+ Tambah data<a>

 ?>