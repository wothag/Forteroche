<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 19/01/2018
 * Time: 16:24
 */
require ('model.php');

function listChapters()
{
    $chapters = getChapters();

    require('listView.php');
}

function comments()
{
    $chapter = getChapter($_GET['id']);
    $comments = getComments($_GET['id']);
    require('commentsView.php');


}

