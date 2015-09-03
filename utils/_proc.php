<?php
/**
 * Librairie de fonctions utilies pour le projet AgendaClinique
 */


/**
 * Générer le code HTML pour toutes les options (contenu d'un élément select)
 * permettant de choisir une activité.
 * @param $liste_activites : Tableau des activités possibles
 * @param $activite_selectionnee : Activitée couramment choisie
 * @return string : Le code HTML pour le select
 */
function html_options_activites($liste_activites, $activite_selectionnee) {
    $result = '';
    foreach ($liste_activites as $num => $activite) {
        $result .= '<option' . (($activite_selectionnee == $activite) ? ' selected="selected"' : '') . ' value="' . $num .'">';
        $result .= $activite;
        $result .= '</option>';
    }
    return $result;
}
