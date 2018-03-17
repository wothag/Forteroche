<?php $title = htmlspecialchars($post['title']) ?>



<!doctype html>

<head>
    <link href="public/css/StyleHome.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?familly=Crete+Round" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
                <?= nl2br($post['content']) ?>
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
            <p><?= nl2br($comment['comment']) ?></p><br/><br/>
            <div>
                <form action="index.php?action=flag&amp;id=<?= $comment['id'] ?>" method="post">
                <input type="submit" name="Flag"  value="Signaler le commentaire" class="button2" /><br/><br/><br/>
                </form>
            </div>


			<?php
		}
		?>
    </div>
</div>

        <div>
            <div class="Ajoutcomments">Vous pouvez ajouter vos commentaires ou signaler un commentaire indésirable.</div>

            <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
                <div>
                    <label for="author">Auteur</label><br />
                    <input type="text" id="author" name="author" />
                </div>
                <div>
                    <label for="comment">Commentaire</label><br />
                    <textarea id="comment" name="comment" rows="10" cols="120"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="6Lf8cEsUAAAAAE5bBIHVb0LJ_Zjt6tfTwcV3mX_X"></div>
                <div>
                    <input type="submit" class="button1" />
                </div>
            </form>
         </div>
    </div>
</div>
</div>

