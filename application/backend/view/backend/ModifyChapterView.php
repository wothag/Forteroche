<?php include ('view/includes/header.php');?>

                    <!--start of main panel-->
                <div class="col-sm-10">
                    <h1> Modifier le chapitre</h1> 

                    <div class="col-sm-8">         

                     <form action="index.php?action=validUpdateChapterForm" method="POST">
                     <fieldset>
                        
                        <div class="form-group">
                        <label for="title">Titre : </label>
                        <input class="form-group" type="text" name="title" id="title" placeholder="Chapitre" value ="<?php echo $data['title']?>">
                        </div>
                        
                        <div class="form-group">
                        <label for="author">Auteur :</label>
                        <input class="form-group" type="text" name="author" id="author" value ="<?php echo $data['author']?>" >
                        </div>
                        
                        <div class="form-group">
                        <label for="content">Votre texte</label>
                        <textarea class="form-control" type="text" name="content" id="content" rows="10" cols="132"><?php echo $data['content']?></textarea>

                        </div>


                         <input class="hidden" type="text" name="id" id="author" value ="<?php echo $data['id']?>" >






                        <br>
                        <input class="btn btn-success btn-block" type="submit" name="PUBLIER">


                        <br><br>

                       </form>
                        </fielset>
                      </div>  
                    <!--end of main panel-->        
                </div>
<?php include ('view/includes/footer.php');?>
