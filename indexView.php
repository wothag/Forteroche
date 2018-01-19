
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Jean Forteroche!</h1>
        <p>Derniers Chapitres:</p>

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
            <em><a href="chapter.php?id=<?=$data['id'] ?>">Commentaires</a></em>
            </p>
        </div>
        <?php
        }
        $chapters->closeCursor();
        ?>
    </body>
</html>