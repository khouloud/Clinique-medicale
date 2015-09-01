
<?php
define('EMP_NAME','emp_name');
?>
<header>
    <div id="logo"></div>
    <div id="nom_clinique"><span><?php echo 'Gestion agendas de la ' , NOM_CLINIQUE; ?></span></div>
    <div id="menu">
    <ul>

        <?php

foreach($liste_employes as $emp_id => $emp_data){
    echo '<li><a href="?',PARAM_EMP_ID, '=', $emp_id,'">',$emp_data['emp_name'],'</a></li>';
};


        var_dump($emp_data['emp_name']);

        // TODO: Afficher le menu-liste des employés
        ?>
    </ul>
    </div>

</header>
