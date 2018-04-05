<?php

$token = bin2hex(32);
$_SESSION['token'] = $token;
?>

                    <!--start of main panel-->
                <div class="col-sm-10">
                    <h1> Ecrire un chapitre et le publier</h1> 

                    <div class="col-sm-12">         

                     <form action="index.php?action=validChapterForm" method="POST">
                     <fieldset>
                        
                        <div class="form-group">
                        <label for="title"<span class="FieldInfo"></span></label>
                        <input class="form-group" type="text" name="title" id="title" placeholder="Chapitre">
                        </div>
                        
                        <div class="form-group">
                        <label for="author"<span class="FieldInfo"></span></label>
                        <input class="form-group" type="text" name="author" id="author" placeholder="Auteur">
                        </div>
                        
                        <div class="form-group">
                        <label for="content">Veuillez composer votre chapitre.</label>
                        <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                        </div>

                        
                        </div>

                        <br>
                        <input class="btn btn-success btn-block btn-lg" type="submit" name="PUBLIER">
                       </fielset>
                        <input type ="hidden" name="token" value="<?php echo $token;?>" />
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
