<?php $title = htmlspecialchars($chapter['title']) ?>

<?php ob_start(); ?>

<h1>Vue du <?=htmlspecialchars($chapter['title'])?></h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($chapter['title']) ?><br/>
                <em>le <?= $chapter['date_created_fr'] ?></em><br/>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($chapter['content'])) ?>
            </p>

				<?= nl2br(htmlspecialchars($chapter['author'])) ?>

        </div>

        <h2>Commentaires</h2>

                <form action="index.php?action=addComment&amp;id=<?= $chapter['id'] ?>" method="post">
                    <div>
                        <label for="author">Auteur</label><br />
                        <input type="text" id="author" name="author" />
                    </div>
                    <div>
                        <label for="comment">Commentaire</label><br />
                        <textarea id="comment" name="comment"></textarea>
                    </div>
                    <div>
                        <input type="submit" />
                    </div>
                </form>

        <?php
        while ($comment = $comments->fetch())
            {
        ?>
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['date_comment_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comments'])) ?></p>
        <?php
            }
        ?>
<?php $content = ob_get_clean();?>
<?php require('template.php');?>
