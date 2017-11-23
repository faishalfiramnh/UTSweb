<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th>
    <th>Nama Olir</th>
    <th>kekentalan</th>
    <th>satuan liter</th>

    <th></th></tr>
    <?php
    foreach ($dataoli as $oli)
    {
        echo "<tr>
              <td>$oli->id</td>
              <td>$oli->nama_oli</td>
              <td>$oli->kekentalan</td>
              <td>$oli->satuan_liter</td>
            
              <td>".anchor('oli/edit/'.$oli->id,'Edit')."
                  ".anchor('oli/delete/'.$oli->id,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/Web/index.php/Oli/create">+ Tambah data<a>