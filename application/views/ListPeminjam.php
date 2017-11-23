
<font color="blue">
<?php echo $this->session->flashdata('hasilPinjam'); ?>
</font>
<table border="1">
    <tr><th>ID peminjam</th>
    <th>nama</th>
    <th>alamat</th>
    <th>telpon</th>
    <th>tindakan</th></tr>
    <?php
    foreach ($datapeminjam as $Peminjam)
    {
        echo "<tr>
              <td>$Peminjam->id_peminjam</td>
              <td>$Peminjam->nama</td>
              <td>$Peminjam->alamat</td>
              <td>$Peminjam->telpon</td>
            
              <td>".anchor('Peminjam/editPeminjam/'.$Peminjam->id_peminjam,'Edit')."
                  ".anchor('Peminjam/delete/'.$Peminjam->id_peminjam,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/UTSWeb/index.php/Peminjam/createPeminjam">+ Tambah data<a>

 ?>