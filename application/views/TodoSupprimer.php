<h2>Modification de la tâche :</h2><br><br>
<?php

echo validation_errors();
echo form_open(base_url('Todo/supprimer'));
?>

<?php
echo form_label('ID : ','id');
echo form_input('id', set_value('id', ''));


echo form_submit('Supprimer','Supprimer');

echo form_close();

?>
