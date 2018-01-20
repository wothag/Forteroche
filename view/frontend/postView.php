<?php $title = htmlspecialchars($post['title']) ?>

<?php ob_start(); ?>






<h1>Vue du <?=htmlspecialchars($post['title'])?></h1>
        <p><a href="index.php">Retour à la liste des chapitres du livre</a></p>

        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?><br/>
                <em>le <?= $post['date_created_fr'] ?></em><br/>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>

            <p>
				<?= nl2br(htmlspecialchars($post['author'])) ?>
            </p>
        </div>

        <h2>Commentaires</h2>

<Div >

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
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
</Div>

<p>
        <?php
            while ($comment = $comments->fetch())
                {
        ?>
                <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['date_comment_fr'] ?></p>
                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                    <?php
                }
                ?>

</p>
<?php $content = ob_get_clean();?>
<?php require('template.php');?>
