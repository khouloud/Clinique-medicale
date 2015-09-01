<?php 
require_once 'data/_data.php';
$emp_id = 102; // Employé "par défaut"
// TODO: Lire et mettre à jour l'id de l'employé en Query string
$liste_employes = get_employes(); // Liste des noms de tous les employés
$emp_data = $liste_employes[$emp_id];
$agenda = get_agenda($emp_id);
?>
<html>
	<head>
        <meta charset = "UTF-8" />
        <title>Agenda Cabinet Médical blah</title>
	</head>
<body>
    <?php require_once('view_bloc/_view_header.php') ?>
    <h2>Activité de l'employé <?php echo $emp_data['emp_name'] ?> </h2>
	<div id="agenda">
		<table>
			<tr><th>Heure</th><th>Activité</th></tr>

<?php

foreach (get_agenda($_GET[PARAM_EMP_ID]) as $key => $value){
	echo '<tr><th>',$key,'</th><th>',$value,'</th></tr>';
}
// TODO: Afficher l'agenda de l'employé
if (array_key_exists(PARAM_EMP_ID,$_GET)) {
	echo $_GET[PARAM_EMP_ID];
}
?>
		</table>
	</div>
    <?php require_once('view_bloc/_view_footer.php') ?>
</body>
</html>