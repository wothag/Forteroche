<?php
echo '<script>alert("le commentaire a été signalé");</script>'; 
header("location:index.php?action=listPosts");
exit; 