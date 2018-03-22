<h2>Remplissez les champs !</h2><br><br>
<?php

echo validation_errors();
echo form_open(base_url('Todo/add'));

echo form_label('Ordre : ','ordre');
echo form_input('ordre', set_value('odre', 0));
?>
<br>
<br>

<?php

echo form_label('Tâche : ','task');
echo form_input('task', set_value('task', 'saisir votre tâche'));

echo form_submit('Ajouter','Ajouter');

echo form_close();
?>
