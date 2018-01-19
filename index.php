<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/01/2018
 * Time: 10:24
 */


require ('controller.php');

if (isset($_GET['action']))
{
    if ($_GET['action'] == 'listChapters')
    {
        listChapters();
    }
    elseif ($_GET['action'] == 'comments')
    {
        if (isset($_GET['id']) && $_GET['id'] > 0)
        {
            comments();
        } else
            {
            echo 'Attention : aucun identifiant de billet envoyé, il s\'agit d\'une erreur';
            }
    }
}
 else {
 listChapters();
}



