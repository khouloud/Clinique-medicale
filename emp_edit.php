<?php
    /* inclure les ficiers _data.php et _proc.php*/
    require_once  'data/_data.php';
    require_once  'utils/_proc.php';
    define('PARAM_SUBMIT', 'submit');
    $liste_employes = get_employes();

        if (array_key_exists(PARAM_EMP_ID, $_GET)) {
            $emp_id = $_GET[PARAM_EMP_ID];
        }
    $liste_activites = get_activites();
    $agenda = get_agenda($emp_id);

        if (array_key_exists(PARAM_SUBMIT, $_POST)) {
            $agenda['08'] = $liste_activites[$_POST['08']];
            $agenda['09'] = $liste_activites[$_POST['09']];
            $agenda['10'] = $liste_activites[$_POST['10']];
            $agenda['11'] = $liste_activites[$_POST['11']];
            $agenda['12'] = $liste_activites[$_POST['12']];
            $agenda['13'] = $liste_activites[$_POST['13']];
            $agenda['14'] = $liste_activites[$_POST['14']];
            $agenda['15'] = $liste_activites[$_POST['15']];
            set_agenda($emp_id, $agenda);
            header('location: index.php?'.PARAM_EMP_ID.'='.$emp_id);
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier l'agenda des l'employes</title>
</head>
<body>
  <?php //require_once('view_bloc/_view_header.php') ?>
    <div>
        <form name="form_agenda" method="post">
            <h3>Heure / Activité</h3>
            <div class="form-control">
                <label for="08">08</label>
                <select id="08" name="08">
                    <?php echo html_options_activites($liste_activites, $agenda['08']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="09">09</label>
                <select id="09" name="09">
                    <?php echo html_options_activites($liste_activites, $agenda['09']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="10">10</label>
                <select id="10" name="10">
                    <?php echo html_options_activites($liste_activites, $agenda['10']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="11">11</label>
                <select id="11" name="11">
                    <?php echo html_options_activites($liste_activites, $agenda['11']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="12">12</label>
                <select id="12" name="12">
                    <?php echo html_options_activites($liste_activites, $agenda['12']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="13">13</label>
                <select id="13" name="13">
                    <?php echo html_options_activites($liste_activites, $agenda['13']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="14">14</label>
                <select id="14" name="14">
                    <?php echo html_options_activites($liste_activites, $agenda['14']); ?>
                </select>
            </div>
            <div class="form-control">
                <label for="15">15</label>
                <select id="15" name="15">
                    <?php echo html_options_activites($liste_activites, $agenda['15']); ?>
                </select>
            </div>
            <div>
                <input type="submit"  name="<?= PARAM_SUBMIT ?>" value="EDIT" />
            </div>
        </form>
    </div>
</body>
</html>