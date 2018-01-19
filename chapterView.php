
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
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
            <p><strong><?= htmlspecialchars($comments['author']) ?></strong> le <?= $comments['date_comments_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comments['comments'])) ?></p>
        <?php
        }
        ?>
    </body>
</html>