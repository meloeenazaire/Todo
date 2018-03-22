<center><h1>Réordonner mes tâches</h1>
<?php

echo validation_errors();
echo form_open(base_url('Todo/reordonner'));
?>

<?php foreach($todos as $todo): ?>
        
        <!--déclaration des variables-->
        <?php
        $task=$todo['task'];
        $ordre=$todo['ordre'];
        
        echo form_input('ordre', set_value('ordre',$ordre*10));
        echo $task;
        
        ?><br><br>
        
        
<?php endforeach; ?>

<br>
<br>

<?php
echo form_submit('Réordonner','Réordonner');

echo form_close();
?>
</center>
<?php 
