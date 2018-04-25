<?php require_once('application/frontend/model/PostManager.php');?>

    <head>
        <link href="public/css/StyleHome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?familly=Crete+Round" rel="stylesheet">

        <title> Liste de chapitres</title>
    </head>
    <header>
		<?php $title = 'Blog de Mr Forteroche' ?>

    </header>



<?php
while ($data = $page_posts->fetch())
{
	?>
    <div class="container-fluid">
        <div class="col-sm-10">
            <div class="chapter-title">
				<?= htmlspecialchars($data['title']); ?><br/><br/>
            </div>
            <strong>le <?=$data['date_created_fr']; ?></strong><br/><br/>

            <p>
				<?= nl2br($data['content']);?>
                <br/>
                <strong><?= nl2br(htmlspecialchars($data['author']));?></strong>
                <br/> <br/> <br/>
            <div class="btn-custom">
                <a type="button" class="btn btn-outline-warning" href="index.php?action=post&amp;id=<?=$data['id'] ?>">Accès aux commentaires</button></a>

            </div><hr><br/><br/>

        </div>
    </div>

	<?php
}

echo '<a href="index.php?action=listPosts&page=1"> 1 </a>';
for ($i=2 ; $i<=$nb_pages ; $i++) {
	echo '<a href="index.php?action=listPosts&page=' . $i . '">' . $i . '</a>';
	$page_posts->closeCursor();
}
?>

<?php $content = ob_get_clean();?>

<?php require('template.php');?>