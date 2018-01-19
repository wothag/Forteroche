<?php $title = 'Voir les commentaires' ?>

<?php ob_start(); ?>

<h1>Vue du chapitre!</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($chapter['title']) ?>
                <em>le <?= $chapter['date_created_fr'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($chapter['content'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
        while ($comment = $comments->fetch())
            {
            ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['date_comments_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comments'])) ?></p>
            <?php
            }
            ?>
<?php $content = ob_get_clean();?>
<?php require('template.php');?>
