<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>id buku</th>
    <th>judul</th>
    <th>Pengarang</th>
    <th>tahun</th>
    <th></th></tr>
    <?php
    foreach ($databuku as $Buku)
    {
        echo "<tr>
              <td>$Buku->id_buku</td>
              <td>$Buku->judul</td>
              <td>$Buku->pengarang</td>
              <td>$Buku->tahun_terbit</td>
            
              <td>".anchor('Buku/edit/'.$Buku->id_buku,'Edit')."
                  ".anchor('Buku/deleteBuku/'.$Buku->id_buku,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/UTSWeb/index.php/Buku/createBuku">+ Tambah data<a>