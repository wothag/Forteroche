<?php $title = 'Blog de Mr Forteroche' ?>

<?php ob_start(); ?>

        <?php
        while ($data = $chapters->fetch())
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
            <em><a href="index.php?action=comments&amp;id=<?=$data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        $chapters->closeCursor();
        ?>
<?php $content = ob_get_clean();?>
<?php require('template.php');?>
