<?php $title = 'Blog de Mr Forteroche' ?>

<?php ob_start(); ?>

<!doctype html>
<html>
<head>
    <link href="public/css/StyleHome.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?familly=Crete+Round" rel="stylesheet">
    <title> Liste de chapitres</title>
</head>
<header>

    <div class="wrapper">
        <h1>Jean Forteroche<span class="orange">.</span><br></h1>
        <!--pan class="text-billet">Billet Simple pour l'Alaska</span>-->

        <nav>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="index.php?action=listPosts">liste des chapitres</a></li>
               
            </ul>

        </nav>
    </div>


</header>


<?php
        while ($data = $posts->fetch())
        {
        ?>
<div class="wrapper">
        <div class="Chapter-number">
            <div class="chapter-title">
                <?= htmlspecialchars($data['title']); ?><br/><br/>
            </div>
            <em>le <?=$data['date_created_fr']; ?></em><br/><br/>

            <p>
            <?= nl2br($data['content']);?>
                <br/>
            <em><?= nl2br(htmlspecialchars($data['author']));?></em>
                <br/> <br/> <br/>
             <div class="comments">

                        <em><a href="index.php?action=post&amp;id=<?=$data['id'] ?>">Accès aux Commentaires</a></em> <br/>
            </div><hr><br/><br/>
            </p>
        </div>
</div>
        <?php
        }
        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean();?>

<?php require('template.php');?>
