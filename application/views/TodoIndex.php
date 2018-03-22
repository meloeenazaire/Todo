<?php
defined('BASEPATH')OR exit ('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="container">
        <center><h1><?php echo $title ?></h1>
        <?php foreach($todos as $todo): ?>
        
        <!--déclaration des variables-->
        <?php
        $task=$todo['task'];
        $id=$todo['id'];
        $ordre=$todo['ordre'];
        $completed=$todo['completed'];
        ?>
        
        <!--début de la condition-->
            <?php
            if($completed==0)
            {
                $completed='A Faire';
                echo $task." ".$id." ".$ordre;
            }
            else{
                echo "<s>".$task." ".$id." ".$ordre." </s>";
            }
            
            if ($completed!='Fait') 
            {
                ?><a href="<?php echo base_url('Todo/fait/'.$todo['id'])?>">&nbsp;Fait</a>&nbsp;
                <?php
            }
            ?><br><br><?php
         endforeach; ?>
        
        <h3><a href="<?php echo base_url('Todo/modifier/'.$todo['id'])?>">Modifier</a>&nbsp;
        <a href="<?php echo base_url('Todo/supprimer/'.$todo['id'])?>">Supprimer</a><br><br>
        <a href="<?php echo base_url('Todo/add')?>">Ajouter Une Nouvelle Tâche</a>&nbsp; &nbsp;
        &nbsp;<a href="<?php echo base_url('Todo/reordonner')?>">Réordonner les tâches</a></h3><br></center>
        
    </div><!-- /.container -->

</body>
</html>

