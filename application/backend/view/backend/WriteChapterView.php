<?php session_start(); ?>

<?php include ('view/includes/header.php');?>


<!doctype html>
<html>
<head>
    <title> Administration du Site</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../public/css/back-admin.css" rel="stylesheet" id="bootstrap-css">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: '#content'
        });
    </script>
</head>









                    <!--start of main panel-->
                <div class="col-sm-10">
                    <h1> Ecrire un chapitre et le publier</h1> 

                    <div class="col-sm-12">         

                     <form action="index.php?action=validChapterForm" method="POST">
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
                        <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                        </div>

                        
                        </div>

                        <br>
                        <input class="btn btn-success btn-block btn-lg" type="submit" name="PUBLIER">
                       </fielset>
                       </form>
                      </div>  
                    <!--end of main panel-->        
                </div>
            </div>
            <!--end of bootstrap row-->   
        </div></br>
        

            <!--end of bootstrap container-->
    </body>
</html>    
