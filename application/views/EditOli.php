<?php echo form_open('Oli/edit');?>
<?php echo form_hidden('id',$dataoli[0]->id);?>

<table>
    <tr><td>ID</td><td><?php echo form_input('',$dataoli[0]->id,"disabled");?></td></tr>
    <tr><td>Nama oli</td><td><?php echo form_input('nama_oli',$dataoli[0]->nama_oli);?></td></tr>
    <tr><td>Kekentalan</td><td><?php echo form_input('kekentalan',$dataoli[0]->kekentalan);?></td></tr>
     <tr><td>Satuan liter</td><td><?php echo form_input('satuan_liter',$dataoli[0]->satuan_liter);?></td></tr>
 
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('Oli','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>