<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th>
    <th>NAMA motor</th>
    <th>jenis kerusakan</th>
    <th>harga</th>
    <th>jenis motor</th>
    <th></th></tr>
    <?php
    foreach ($databengkel as $Bengkel)
    {
        echo "<tr>
              <td>$Bengkel->id</td>
              <td>$Bengkel->nama_motor</td>
              <td>$Bengkel->jenis_kerusakan</td>
              <td>$Bengkel->harga</td>
              <td>$Bengkel->jenis_motor</td>
              <td>".anchor('Bengkel/edit/'.$Bengkel->id,'Edit')."
                  ".anchor('Bengkel/delete/'.$Bengkel->id,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/Web/index.php/Bengkel/createBeng">+ Tambah data<a>