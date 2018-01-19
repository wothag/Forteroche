<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/01/2018
 * Time: 16:24
 */
require('model/model.php');

function listChapters()
{
    $chapters = getChapters();

    require('view/listView.php');
}

function listComments()
{
    $chapter = getChapter($_GET['id']);
    $comments = getComments($_GET['id']);
    require('view/commentsView.php');


}

