<h2>Modification de la tâche :</h2><br><br>
<?php

echo validation_errors();
echo form_open(base_url('Todo/modifier'));
?>

<?php
echo form_label('ID : ','id');
echo form_input('id', set_value('id', ''));
?>
<br>
<br>
<?php
echo form_label('Ordre : ','ordre');
echo form_input('ordre', set_value('odre', ''));
?>
<?php

echo form_label('Tâche : ','task');
echo form_input('task', set_value('task', ''));

echo form_submit('Valider la modification','Valider la modification');

echo form_close();
?>


