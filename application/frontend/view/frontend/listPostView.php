<!-- normalement les accès aux modlees ne doivent plus se faire dans la vue?> -->

<?php ob_start();?>

<?php while ($data = $page_posts->fetch()):?>
	<div class="container-fluid">
        	<div class="col-sm-10">
            		<div class="chapter-title">
				<?= htmlspecialchars($data['title']); ?>
				<br/><br/>
            		</div>
            		<strong>le <?=$data['date_created_fr']; ?></strong>
			<br/><br/>
            		<p>
				<?= nl2br($data['content']);?>
                		<br/>
                		<strong><?= nl2br(htmlspecialchars($data['author']));?></strong>
                		<br/> <br/> <br/>
            			<div class="btn-custom">
                		<a type="button" class="btn btn-outline-warning" href="index.php?action=post&amp;id=<?=$data['id'] ?>">
					Accès aux commentaires</button>
				</a>
			</p>
            	</div>
		<hr><br/><br/>
        </div>
    </div>
<?php endwhile ;?>

<a href="index.php?action=listPosts&page=1"> 1 </a>

<?php for ($i=2 ; $i<=$nb_pages ; $i++):?>
	<a href="index.php?action=listPosts&page=<?= $i;?>"><?= $i ;?></a>';
<?php endfor;?>

<?php $content = ob_get_clean();?>

<?php require('template.php');?>
