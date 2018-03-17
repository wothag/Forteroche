<?php session_start(); ?>

<!doctype html>
<html>
        <head>		
            <title> Administration du Site</title>  
            <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <link href="../../public/css/back-admin.css" rel="stylesheet" id="bootstrap-css"> 
        </head>
       

    
    <body>
     <div class="container-fluid">
     <div class="row">
        <!--start of side panel-->
        <div class="col-sm-2"</div>
            <h2>Jean forteroche</h2>
                <ul id="Side_Menu"class="nav nav-pills nav-stacked">
                    <li class="active"><a href="../../index.php"><span class="glyphicon glyphicon-th"></span>&nbsp;Retour sur le site</a></li>
                    <li><a href="../backend/index.php?action=writeChapter"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Ajouter un chapitre</a></li>
                    <li><a href="../backend/index.php?action=allChapters"><span class="glyphicon glyphicon-trash"></span>&nbsp;Modifier/Effacer un chapitre</a></li>
                    <li><a href="../backend/index.php?action=modcomments"><span class="glyphicon glyphicon-comment"></span>&nbsp;Modérer les commentaires</a></li>   
                    <li><a href="../backend/index.php?action=deconnection"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Se déconnecter</a></li>            
                </ul>
        </div>
        <!--end of side panel-->

         <!--start of main panel-->
        <div class="col-sm-10">
        <h1> Vue de tous les résumés des chapitres</h1>
        <div class="col-lg-12 table-responsive">
            <table class="table table-bordered table-striped">
			    <thead>
                    <tr>
                        <th>chapitre</th><th>Date</th><th>Contenu</th><th>Auteur</th><th>Effacer</th><th>Modifier</th>
			    </thead>
        <?php 
          while ($data = $allchapters->fetch())
          {
                {
                echo    '<tr>   <td>'.$data['title'],
                                '<td>'.$data['date_created_fr'],
                                '<td>'.substr($data['content'],0,200),
                                '<td>'.$data['author'],
								'<td><a class ="btn btn-danger" href="index.php?action=deleteChapter&id='.$data['id'].'"><span class="glyphicon glyphicon-moins"></span> Effacer</a>',
								'<td><a class ="btn btn-warning" href="index.php?action=modifychapter&id='.$data['id'].'"><span class="glyphicon glyphicon-moins"></span> Modifier</a>',
                        '</tr>'; 
                }     
         ?>              
        <?php
        }
        $allchapters->closeCursor();
        ?>
     
            <!--end of main panel-->        
    </div>
    </div>
      <!--end of bootstrap row-->   
    </div>
    <!--end of bootstrap container-->
       </div>
    </body>
    </div>

    </html>

  