<?php   include("view/includes/header.php");
        require('controller/backend.php');
       

try {
    if (isset($_GET['action'])){
        if ($_GET['action']=='modcomments'){
            modcomments();
        }
        if ($_GET['action']=='viewreaders'){
            viewreaders();
        }
    }
    else 
    {
        HomeAdmin();
    }
}
catch(Exception $e){
    echo 'Erreur :'. $e->getMessage();
}
?>
        <!-- Navigation 
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Blog de Mr Forteroche</a>
            </div>

            <!-- Topbar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("view/includes/top_nav.php")?>
            <!-- /.Topbar-end -->

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("view/includes/side_nav.php")?>
            <!-- /.Side_nav-end -->
        </nav>

        <div id="page-wrapper">
			<?php include("view/includes/admin_content.php")?>

        </div>
        <!-- /#page-wrapper -->

  <?php include("view/includes/footer.php"); ?>