<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 18/01/2018
 * Time: 14:17
 */

require('model.php');

if (isset($_GET['id']) && $_GET['id'] > 0) {
    $chapter = getChapter($_GET['id']);
    $comments = getComments($_GET['id']);
    require('chapterView.php');
}
else {
    echo 'Erreur : aucun identifiant de billet envoyé';
}