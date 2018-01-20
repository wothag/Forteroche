<?php $title = 'Blog de Mr Forteroche' ?>

<?php ob_start(); ?>

<h1>Le dernier livre de Jean Forteroche !</h1>
<p>Derniers Chapitres:</p>



<?php
        while ($data = $posts->fetch())
        {
        ?>
        <div class="news">
            <h3>
                <?= htmlspecialchars($data['title']); ?><br/><br/>
                <em>le <?=$data['date_created_fr']; ?></em>
            </h3>

            <p>
            <?= nl2br(htmlspecialchars($data['content']));?>
                <br/>
            <em><?= nl2br(htmlspecialchars($data['author']));?></em>
                <br/>
            <em><a href="index.php?action=post&amp;id=<?=$data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        $posts->closeCursor();
        ?>

<?php $content = ob_get_clean();?>

<?php require('template.php');?>
