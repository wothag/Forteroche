<?php require_once ('model/WriteManager.php'); ?>
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

                    <!--start of main panel-->
                <div class="col-sm-10">
                    <h1> Ecrire un chapitre et le publier</h1> 

                    <div class="col-sm-8">         

                     <form action="model/WriteManager.php" method="POST">
                     <fieldset>
                        
                        <div class="form-group">
                        <label for="title"<span class="FieldInfo">Chapitre:</span></label>
                        <input class="form-group" type="text" name="title" id="title" placeholder="Chapitre">
                        </div>
                        
                        <div class="form-group">
                        <label for="author"<span class="FieldInfo">Auteur:</span></label>
                        <input class="form-group" type="text" name="author" id="author" placeholder="Auteur">
                        </div>
                        
                        <div class="form-group">
                        <label for="content">Votre texte</label>
                        <textarea class="form-control" id="content" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                        <label for="date_created"<span class="FieldInfo">Date:</span></label>
                        <input class="form-group" type="text" name="date_created" id="date_created_fr" placeholder="Date">
                        </div>
                         </div>

                        <br>
                        <input class="btn btn-success btn-block" type="submit" name="PUBLIER">
                       </fielset>
                       </form>
                      </div>  
                    <!--end of main panel-->        
                </div>
            </div>
            <!--end of bootstrap row-->   
        </div>
            <!--end of bootstrap container-->
    </body>
</html>    
