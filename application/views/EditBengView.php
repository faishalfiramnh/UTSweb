<?php echo form_open('Bengkel/edit');?>
<?php echo form_hidden('id',$databengkel[0]->id);?>

<table>
    <tr><td>ID</td><td><?php echo form_input('',$databengkel[0]->id,"disabled");?></td></tr>
    <tr><td>NAMA motor</td><td><?php echo form_input('nama_motor',$databengkel[0]->nama_motor);?></td></tr>
    <tr><td>Jenis kerusakkan</td><td><?php echo form_input('jenis_kerusakan',$databengkel[0]->jenis_kerusakan);?></td></tr>
     <tr><td>harga</td><td><?php echo form_input('harga',$databengkel[0]->harga);?></td></tr>
      <tr><td>Jenis motor</td><td><?php echo form_input('jenis_motor',$databengkel[0]->jenis_motor);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Bengkel','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>