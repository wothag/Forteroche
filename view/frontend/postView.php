<?php $title = htmlspecialchars($post['title']) ?>

<?php ob_start(); ?>

<!doctype html>

<head>
    <link href="public/css/StyleHome.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?familly=Crete+Round" rel="stylesheet">
    <title> Vue du <?=htmlspecialchars($post['title'])?></title>
</head>
<header>

    <div class="wrapper">
        <h1>Jean Forteroche<span class="orange">.</span><br></h1>
        <!--pan class="text-billet">Billet Simple pour l'Alaska</span>-->

        <nav>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="index.php?action=listPosts">liste des chapitres</a></li>
                <li><a href="#connexion">connexion</a></li>
            </ul>

        </nav>
    </div>


</header>




<div class="wrapper">
    <div class="Chapter-number">
        <div class="chapter-title">
                <?= htmlspecialchars($post['title']) ?><br/><br/>
                <em>le <?= $post['date_created_fr'] ?></em><br/><br/>
        </div>
            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p><br/><br/>

            <p>
				<?= nl2br(htmlspecialchars($post['author'])) ?>
            </p><br/>
        </div>


<div class="form-comments" ><hr>


    <div class="print-comments">
        <div class="comments">Commentaires</div>
		<?php
		while ($comment = $comments->fetch())
		{
			?>
            <div><strong>Pseudo : <?= htmlspecialchars($comment['author']) ?></strong> <br/>Le <?= $comment['date_comment_fr'] ?></div><br/>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p><br/><br/>
			<?php
		}
		?>
    </div>
</div>

        <div>
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
                    <input type="submit" class="button1" />
                </div>
            </form>
         </div>
</div>

<?php $content = ob_get_clean();?>
<?php require('template.php');?>
